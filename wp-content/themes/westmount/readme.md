# Boilerplate Wordpress Theme with Vite

## Installation (Node.js/npm required):

Clone or Unpack and copy folder to your Wordpress installation /wp-content/themes/ folder, or install theme via wp-admin by uploading .zip file and activate the theme.
Then from your console or command prompt go to the theme folder and run **pnpm install**. Note: NodeJS is requred.

```bash
pnpm install
```

Quick commands:
```bash
# dev server start
pnpm run dev

# production build
pnpm run build
```

## Setup

Entry point file **main.js** is where you include all your scripts and styles. It can be changed via **vite.config.json** and **functions.php**.

```bash
# get styles
import "./assets/css/styles.css"

# get scripts
import "./assets/js/scripts.js"
```

## Development with live preview/refresh

Ensure **define("IS_VITE_DEVELOPMENT", true);** exists in your **wp-config.php** or theme/plugin **functions.php**. Just run **npm run dev** and refresh your development website.

```bash
pnpm run dev
```
After Vite dev server is started open your installed Wordpress website in any browser or refresh it. Then you can start editing index.php, or any other php file in your theme, by adding elements and Tailwind classes. After saving changes your browser page eg your site should refresh immediately. You can freely edit asset files like styles.css, scripts.js too.


## Production build

Just run **npm run build**, set defined **IS_VITE_DEVELOPMENT** to **false** and refresh local website.

```bash
pnpm run build
```
Wordpress should load now production generated assets.

Note: To ensure classes used inside CMS to be processed just add them to safelist.txt and run build again.


## Sass / Less

CSS Pre-processors are also supported by ViteJS

```bash
# .scss and .sass
pnpm add -D sass

# .less
pnpm add -D less
```

## Note for httpS serving
If your local development domain is served via **https**:// then generating certificate for localhost usage and some changes in config are required
- install mkcert utility and follow the instructions how to generate & install certificate https://github.com/FiloSottile/mkcert
    - example on Windows 10 (PowerShell as Administrator)

```bash
# install mkcert
choco install mkcert

# global one time install
mkcert -install

# run in project/theme folder to create localhost-key.pem & localhost.pem 
mkcert localhost
```

- enable server.https option in **vite.config.js**
- change VITE_SERVER to http**s** in your **inc/inc.vite.php**
