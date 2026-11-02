import subprocess
import urllib.request
import json
import os
import sys

git_exe = r'C:\Users\umama\AppData\Local\GitHubDesktop\app-3.6.10\resources\app\git\cmd\git.exe'
repo_name = 'kuis1-bigdata'
project_dir = r'C:\xampp\htdocs\bigdata'

# 1. Ambil Token dari Git Credential Manager
p = subprocess.Popen([git_exe, 'credential', 'fill'], stdin=subprocess.PIPE, stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True)
stdout, stderr = p.communicate('protocol=https\nhost=github.com\nusername=gitaniagesa-cpu\n\n')

token = ''
username = 'gitaniagesa-cpu'
for line in stdout.splitlines():
    if line.startswith('password='):
        token = line.split('=', 1)[1]
    elif line.startswith('username='):
        username = line.split('=', 1)[1]

if not token:
    print('Error: Token tidak ditemukan.')
    sys.exit(1)

print(f'Autentikasi terverifikasi untuk user: {username}')

# 2. Buat Repo di GitHub jika belum ada
headers = {
    'Authorization': f'Bearer {token}',
    'User-Agent': 'Python-Deploy-Script',
    'Accept': 'application/vnd.github.v3+json',
    'Content-Type': 'application/json'
}

create_repo_url = 'https://api.github.com/user/repos'
repo_payload = {
    'name': repo_name,
    'description': 'KUIS 1 Praktikum Big Data - Fatkhul Umam (NPM: 24430121)',
    'private': False,
    'auto_init': False
}

try:
    req = urllib.request.Request(create_repo_url, data=json.dumps(repo_payload).encode('utf-8'), headers=headers)
    with urllib.request.urlopen(req) as resp:
        print(f'Repository {repo_name} berhasil dibuat di GitHub!')
except urllib.error.HTTPError as e:
    err_body = e.read().decode()
    if 'already exists' in err_body:
        print(f'Repository {repo_name} sudah ada di GitHub, melanjutkan...')
    else:
        print(f'Info repo: {e} - {err_body}')

# 3. Git Init, Add, Commit, Push
os.chdir(project_dir)

# Config local user if needed
subprocess.run([git_exe, 'init'], check=True)
subprocess.run([git_exe, 'config', 'user.name', 'Fatkhul Umam'], check=True)
subprocess.run([git_exe, 'config', 'user.email', 'gitaniagesa@gmail.com'], check=True)

# Set branch main
subprocess.run([git_exe, 'branch', '-M', 'main'], check=True)

# Add all files
subprocess.run([git_exe, 'add', '.'], check=True)

# Commit
subprocess.run([git_exe, 'commit', '-m', 'Tugas KUIS 1 Big Data - Fatkhul Umam (24430121)'], check=False)

# Add remote
remote_url = f'https://github.com/{username}/{repo_name}.git'
subprocess.run([git_exe, 'remote', 'remove', 'origin'], check=False)
subprocess.run([git_exe, 'remote', 'add', 'origin', remote_url], check=True)

# Push
push_cmd = [git_exe, 'push', '-u', 'origin', 'main', '--force']
print('Mendorong source code ke GitHub...')
res = subprocess.run(push_cmd, capture_output=True, text=True)
print('Push result stdout:', res.stdout)
print('Push result stderr:', res.stderr)

# 4. Aktifkan GitHub Pages via API
pages_url = f'https://api.github.com/repos/{username}/{repo_name}/pages'
pages_payload = {
    'source': {
        'branch': 'main',
        'path': '/'
    }
}

try:
    req_pages = urllib.request.Request(pages_url, data=json.dumps(pages_payload).encode('utf-8'), headers=headers)
    with urllib.request.urlopen(req_pages) as resp:
        print('GitHub Pages berhasil diaktifkan!')
except urllib.error.HTTPError as e:
    err_body = e.read().decode()
    if 'already has a GitHub Pages site' in err_body or 'already exists' in err_body:
        print('GitHub Pages sudah aktif!')
    else:
        print(f'Info Pages: {e} - {err_body}')

print('\n' + '='*50)
print(f'Repository GitHub: https://github.com/{username}/{repo_name}')
print(f'Link Demo Online (1 Link): https://{username}.github.io/{repo_name}/')
print('='*50)
