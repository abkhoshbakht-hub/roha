# رها — Raha

سایت نرم‌افزاری رها — ساخته‌شده با **وردپرس** به همراه تم اختصاصی و افزونه اجباری (mu-plugin).

> ⚠️ این ریپو فقط **کد سفارشی** را نگه می‌دارد. هسته وردپرس (`wp-admin/`، `wp-includes/`) و افزونه‌ها commit نمی‌شوند — از [wordpress.org](https://wordpress.org) دانلود می‌شوند.

## ساختار

```
wp-content/
  themes/roha-theme/       تم اختصاصی رها
    ├── style.css          استایل اصلی (+ هدر Theme Name)
    ├── functions.php      توابع تم
    └── index.php
  mu-plugins/
    └── rh-plugin.php      افزونه اجباری رها
  uploads/
    └── 2026/09/           لوگو
roha.html                  نسخه استاتیک تک‌فایلی سایت
serve.js                   سرور پیش‌نمایش نسخه استاتیک
package.json               فقط اسکریپت — نیازی به npm install نیست
```

## اجرا (پیش‌نمایش نسخه استاتیک)

```bash
npm run dev
```

سپس <http://localhost:3000> — نسخه استاتیک (`roha.html`) بالا می‌آید.

> این پروژه **هیچ dependency ندارد**، پس `npm install` لازم نیست.

بررسی سینتکس PHP (اگر PHP نصب باشد):

```bash
npm run lint:php
```

## راه‌اندازی وردپرس

۱. وردپرس را دانلود و کنار این پوشه قرار دهید.
۲. محتویات `wp-content/` را روی `wp-content` نصب وردپرس کپی کنید.
۳. `wp-config.php` را با اطلاعات دیتابیس خود بسازید (در git نیست).
۴. وردپرس را اجرا کنید.

یا با Docker:

```bash
docker run --name roha -p 8000:80 -v "$PWD:/var/www/html" wordpress:latest
```

## استقرار

۱. فایل‌های ریپو را روی سرور کپی کنید.
۲. وردپرس ۶.۸+ را روی سرور نصب کنید.
۳. `wp-content` را merge کنید.
۴. از پنل وردپرس، تم `Raha Theme` را انتخاب کنید.

## نکته

`roha.html` یک نسخه استاتیک مستقل از همان سایت است — برای جایگزینی سریع بدون وردپرس.
