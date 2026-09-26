# رها — Raha

سایت نرم‌افزاری رها — دو نسخه دارد:

1. **نسخه استاتیک** (بدون وردپرس) — در `public/`
2. **تم وردپرس** — در `src/wp-content/`

## ساختار

```
roha/
├── public/                    ← نسخه استاتیک — این را روی هاست آپلود کن
│   ├── index.html
│   └── assets/
│       ├── css/style.css
│       ├── js/main.js
│       └── img/logo.png
├── src/                       ← سورس تم وردپرس
│   └── wp-content/
│       ├── themes/roha-theme/     تم اختصاصی رها
│       │   ├── style.css
│       │   ├── functions.php
│       │   └── index.php
│       ├── mu-plugins/
│       │   └── rh-plugin.php       افزونه اجباری رها
│       └── uploads/2026/09/        تصاویر آپلودشده
├── serve.js                   سرور توسعه (Node built-in، بدون dependency)
├── package.json               فقط اسکریپت — نیازی به npm install نیست
└── README.md
```

## اجرا (نسخه استاتیک)

```bash
npm run dev
```

سپس <http://localhost:3002>

> **بدون `npm install`.** این پروژه هیچ dependency ندارد؛ فقط Node (نسخه ۱۸ به بالا) لازم است.

بررسی سینتکس PHP (اگر PHP نصب باشد):

```bash
npm run lint:php
```

## استقرار

### الف) نسخه استاتیک

**محتویات `public/` را آپلود کن.** نیازی به build نیست.

| هاست | مسیر آپلود |
|---|---|
| cPanel / دایرکت‌ادمین | محتویات `public/` → `public_html/` |
| Netlify / Vercel | Publish Directory = `public` |
| FTP / SSH | محتویات `public/` → ریشه سایت |

**چک‌لیست بعد از آپلود:**
- [ ] `index.html` در ریشه هست؟
- [ ] پوشه `assets/` (شامل `css`، `js`، `img`) هم آپلود شده؟
- [ ] حروف بزرگ/کوچک مسیرها مطابق است؟

### ب) نسخه وردپرس

۱. `src/wp-content/` را دانلود کنید.
۲. روی سروری که وردپرس نصب است، محتویات `wp-content/` را داخل `wp-content` موجود merge کنید.
۳. از پنل وردپرس، تم `Raha Theme` را انتخاب کنید.

یا با Docker برای تست محلی:

```bash
docker run --name roha -p 8080:80 -v "$PWD/src/wp-content:/var/www/html/wp-content" wordpress:latest
```

> ⚠️ هسته وردپرس (`wp-admin/`، `wp-includes/`) و افزونه‌ها در git نیستند —
> از [wordpress.org](https://wordpress.org) دانلود می‌شوند. همچنین `wp-config.php`
> که اطلاعات دیتابیس دارد هرگز commit نمی‌شود.
