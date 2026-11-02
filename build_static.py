import urllib.request
import re
import os

base_url = 'http://localhost/bigdata/'
pages = ['index.php', 'viewmhsaja.php', 'viewmhsall.php', 'viewfilterwanita.php', 'me.php']
out_dir = r'C:\xampp\htdocs\bigdata'

for p in pages:
    html = urllib.request.urlopen(base_url + p).read().decode('utf-8')
    # Replace .php links with .html links for static GitHub Pages compatibility
    html_static = re.sub(r'href=["\']index\.php["\']', 'href="index.html"', html)
    html_static = re.sub(r'href=["\']viewmhsall\.php["\']', 'href="viewmhsall.html"', html_static)
    html_static = re.sub(r'href=["\']viewmhsaja\.php["\']', 'href="viewmhsaja.html"', html_static)
    html_static = re.sub(r'href=["\']viewfilterwanita\.php["\']', 'href="viewfilterwanita.html"', html_static)
    html_static = re.sub(r'href=["\']me\.php["\']', 'href="me.html"', html_static)
    
    out_name = p.replace('.php', '.html')
    with open(os.path.join(out_dir, out_name), 'w', encoding='utf-8') as f:
        f.write(html_static)
    print(f'Generated {out_name}')
print('All static HTML pages generated successfully!')
