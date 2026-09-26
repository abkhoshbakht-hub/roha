<?php
add_filter('body_class', function($c){$c[]='roha-r';return $c;});
add_action('wp_head', function(){
echo '<style>
html{direction:rtl;text-align:right}
body{padding-top:0!important}
.ast-primary-header-wrap,.ast-main-header-wrap,.site-header,.ast-footer-overlay,.ast-small-footer-wrapper,.ast-breadcrumbs-wrapper,.ast-below-header-wrap{display:none!important}

/* Header */
.rh-hdr{background:#fff;border-bottom:1px solid #e5e7eb;position:sticky;top:0;z-index:99}
.rh-hdr-in{max-width:1100px;margin:0 auto;padding:0 24px;display:flex;align-items:center;justify-content:space-between;height:54px}
.rh-hdr img{height:40px}
.rh-hdr nav a{font-size:.88em;color:#475569;font-weight:500;margin-left:22px;transition:.2s}
.rh-hdr nav a:hover,.rh-hdr nav a.cur{color:#6366f1}

/* Hero */
.rh-hero{background:linear-gradient(135deg,#1e293b,#0f172a);color:#fff;text-align:center;padding:60px 20px 44px}
.rh-hero h1{font-size:1.85em;margin:0 0 10px;line-height:1.5}
.rh-hero p{color:#94a3b8;max-width:440px;margin:0 auto 20px;font-size:.98em;line-height:1.6}
.rh-b{display:inline-block;padding:10px 26px;border-radius:9px;font-weight:600;font-size:.88em;transition:.2s;cursor:pointer;border:none}
.rh-bp{background:#6366f1;color:#fff}.rh-bp:hover{background:#4f46e5}
.rh-bo{border:1.5px solid rgba(255,255,255,.3);color:#fff;margin-right:10px}

/* Sections */
.rh-s{padding:48px 20px}.rh-sa{background:#f8fafc}
.rh-st{text-align:center;font-size:1.4em;color:#1e293b;margin-bottom:5px;font-weight:700}
.rh-ss{text-align:center;color:#64748b;font-size:.88em;margin-bottom:30px}

/* Grid */
.rh-g3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;max-width:920px;margin:0 auto}
.rh-g4{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;max-width:920px;margin:0 auto}
.rh-g2{display:grid;grid-template-columns:repeat(2,1fr);gap:22px;max-width:780px;margin:0 auto}

/* Card */
.rh-c{background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:22px 18px;text-align:center;transition:.2s}
.rh-c:hover{box-shadow:0 5px 16px rgba(0,0,0,.06);transform:translateY(-2px)}
.rh-c em{font-size:1.7em;margin-bottom:8px;display:block;font-style:normal}
.rh-c h3{font-size:.96em;color:#1e293b;margin-bottom:4px}
.rh-c p{color:#64748b;font-size:.82em;line-height:1.6}

/* Stats */
.rh-sn{font-size:1.7em;font-weight:800;color:#6366f1;margin-bottom:2px}
.rh-sl{color:#64748b;font-size:.8em}

/* CTA */
.rh-cta{background:linear-gradient(135deg,#6366f1,#8b5cf6);color:#fff;text-align:center;padding:42px 20px;border-radius:14px;max-width:920px;margin:0 auto}
.rh-cta h2{font-size:1.35em;margin-bottom:7px}
.rh-cta p{opacity:.9;margin-bottom:18px;font-size:.92em}
.rh-cta .rh-b{background:#fff;color:#6366f1}

/* Products */
.rh-p{display:flex;align-items:center;background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:20px 24px;margin-bottom:12px;transition:.2s}
.rh-p:hover{box-shadow:0 4px 12px rgba(0,0,0,.05)}
.rh-p em{font-size:1.8em;margin-left:20px;flex-shrink:0;font-style:normal}
.rh-p h3{font-size:1.02em;color:#1e293b;margin-bottom:3px}
.rh-p p{color:#64748b;font-size:.84em;line-height:1.6;margin-bottom:6px}
.rh-tag{display:inline-block;background:#eef2ff;color:#6366f1;padding:3px 10px;border-radius:14px;font-size:.76em;font-weight:600}

/* Pricing */
.rh-pc{background:#fff;border:1px solid #e5e7eb;border-radius:13px;padding:26px 18px;text-align:center;transition:.2s}
.rh-pc:hover{box-shadow:0 5px 16px rgba(0,0,0,.06)}
.rh-pc.pop{border:2px solid #6366f1;position:relative}
.rh-pc.pop::before{content:"محبوب‌ترین";position:absolute;top:-10px;left:50%;transform:translateX(-50%);background:#6366f1;color:#fff;padding:3px 13px;border-radius:14px;font-size:.72em;font-weight:600}
.rh-pc h3{font-size:1.05em;color:#1e293b}
.rh-pc .rp{font-size:1.9em;font-weight:800;color:#6366f1;margin:8px 0 2px}
.rh-pc .rpd{color:#94a3b8;font-size:.8em;margin-bottom:14px}
.rh-pc ul{list-style:none;padding:0;text-align:right;margin-bottom:16px}
.rh-pc li{padding:5px 0;border-bottom:1px solid #f1f5f9;color:#475569;font-size:.84em}
.rh-pc li::before{content:"✓ ";color:#22c55e;font-weight:700}
.rh-pc .rh-b{display:block;text-align:center}

/* FAQ */
.rh-fq{background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 18px;margin-bottom:9px}
.rh-fq h4{color:#1e293b;font-size:.92em;margin:0 0 3px}
.rh-fq p{color:#64748b;font-size:.84em;margin:0;line-height:1.6}

/* Guide */
.rh-g{display:flex;align-items:flex-start;background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:16px 20px;margin-bottom:9px}
.rh-gn{background:#6366f1;color:#fff;width:30px;height:30px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;margin-left:14px;flex-shrink:0;font-size:.82em}
.rh-g h4{color:#1e293b;margin:0 0 2px;font-size:.92em}
.rh-g p{color:#64748b;margin:0;font-size:.84em}

/* Contact */
.rh-cg{display:grid;grid-template-columns:1fr 1fr;gap:32px;max-width:920px;margin:0 auto}
.rh-f label{display:block;color:#374151;font-weight:600;margin-bottom:2px;font-size:.86em}
.rh-f input,.rh-f textarea,.rh-f select{width:100%;padding:8px 12px;border:1px solid #d1d5db;border-radius:7px;font-size:.86em;margin-bottom:11px;font-family:inherit}
.rh-f input:focus,.rh-f textarea:focus{outline:none;border-color:#6366f1}
.rh-f textarea{resize:vertical;min-height:80px}
.rh-i{background:#fff;border:1px solid #e5e7eb;border-radius:9px;padding:14px 18px;margin-bottom:10px}
.rh-i h4{color:#1e293b;font-size:.88em;margin:0 0 2px}
.rh-i p{color:#64748b;font-size:.82em;margin:0;line-height:1.5}
.rh-i a{color:#6366f1;font-weight:600}

/* About */
.rh-asp{display:flex;gap:32px;align-items:center;max-width:840px;margin:0 auto}
.rh-asp .rht{flex:1}
.rh-asp .rht h2{font-size:1.3em;color:#1e293b;margin-bottom:8px}
.rh-asp .rht p{color:#64748b;font-size:.88em;line-height:1.7}
.rh-abox{background:linear-gradient(135deg,#6366f1,#8b5cf6);border-radius:13px;padding:32px;color:#fff;text-align:center;flex-shrink:0;width:180px}
.rh-abox .rbig{font-size:2em;font-weight:800}
.rh-abox .rsm{font-size:.85em;opacity:.9}
.rh-tc{background:#fff;border:1px solid #e5e7eb;border-radius:12px;padding:20px 14px;text-align:center}
.rh-tc .rav{width:50px;height:50px;border-radius:50%;background:linear-gradient(135deg,#6366f1,#8b5cf6);margin:0 auto 8px;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.2em;font-weight:700}
.rh-tc h4{color:#1e293b;font-size:.88em;margin-bottom:1px}
.rh-tc p{color:#94a3b8;font-size:.78em}
.rh-tl{display:flex;align-items:flex-start;margin-bottom:18px}
.rh-ty{background:#6366f1;color:#fff;padding:4px 12px;border-radius:6px;font-weight:700;margin-left:16px;flex-shrink:0;font-size:.82em}
.rh-tl h4{color:#1e293b;margin-bottom:1px;font-size:.9em}
.rh-tl p{color:#64748b;font-size:.84em}

/* Footer */
.rh-ft{background:#0f172a;color:#64748b;text-align:center;padding:22px 20px;font-size:.8em}

/* Inner page hero */
.rh-ih{background:linear-gradient(135deg,#0f172a,#1e293b);color:#fff;text-align:center;padding:52px 20px 34px}
.rh-ih h1{font-size:1.7em;margin-bottom:7px}
.rh-ih p{color:#94a3b8;max-width:440px;margin:0 auto;font-size:.92em}

/* Trust logos */
.rh-tl-row{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;max-width:800px;margin:0 auto;text-align:center}
.rh-tl-item{padding:14px;border:1px solid #e5e7eb;border-radius:10px}
.rh-tl-item strong{display:block;color:#1e293b;font-size:.9em;margin-bottom:2px}
.rh-tl-item span{color:#64748b;font-size:.78em}

@media(max-width:768px){.rh-g3,.rh-g4,.rh-g2,.rh-cg,.rh-asp,.rh-tl-row{grid-template-columns:1fr}.rh-asp{flex-direction:column}.rh-hero h1,.rh-ih h1{font-size:1.4em}}
</style>';
});

add_action('wp_body_open', function(){
$id = get_the_ID();
$a = [''=>'','6'=>'','20'=>'','21'=>'','24'=>'','23'=>''];
foreach($a as $k=>$v) if($id==$k||($k==''&&is_front_page())) $a[$k]=' cur';
echo '<div class="rh-hdr"><div class="rh-hdr-in"><img src="/wp-content/uploads/liandesign.logo.png" alt="رها"><nav>
<a href="/" class="'.$a[''.''].'">خانه</a>
<a href="/?page_id=6" class="'.$a['6'].'">محصولات</a>
<a href="/?page_id=20" class="'.$a['20'].'">قیمت‌گذاری</a>
<a href="/?page_id=21" class="'.$a['21'].'">پشتیبانی</a>
<a href="/?page_id=24" class="'.$a['24'].'">درباره ما</a>
<a href="/?page_id=23" class="'.$a['23'].'">تماس</a>
</nav></div></div>';
});

add_action('wp_footer', function(){
echo '<footer class="rh-ft">Copyright © ۲۰۲۶ رها | نرم‌افزار هوشمند مدیریت کسب‌وکار</footer>';
});
