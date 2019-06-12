<div dir="rtl">
<h1> مسار تطوير نظام إدارة محتوى باستخدام Laravel </h1>
<p>الشيفرة المصدرية الخاصة بمسار تطوير نظام إدارة محتوى باستخدام Laravel ضمن دورة "تطوير تطبيقات الويب باستخدام PHP" المقدمة من أكاديمية حسوب</p>

<div>
<a href=https://academy.hsoub.com/learn/php-web-application-development/">دورة تطوير تطبيقات الويب باستخدام PHP</a>
</div>

<h2> خطوات التثبيت </h2>
<ul>
<li><code>git clone https://github.com/HsoubAcademy/laravel-cms</code></li>
<li><code>composer install</code></li>
<li><code>php artisan migrate</code></li>
<li><code>php artisan db:seed</code></li>
<li><code>php artisan key:generate</code></li>
<li><code>php artisan storage:link</code></li>
<li><code>php artisan serve</code></li>
</ul>
<p>لتجربة عملية تأكيد التسجيل عبر البريد الإلكتروني، اضبط الإعدادات في ملف env بالشكل التالي:</p>
<ol>
<li>سجل في الموقع  https://mailtrap.io لمحاكاة إرسال البريد</li>
<li>انتقل إلى https://mailtrap.io/inboxes/ ثم Demo inbox</li>
<li>انسخ اسم المستخدم وكلمة المرور إلى ملف env ،:لتصبح الإعدادات كالتالي</li>
</ol>

<pre dir="ltr">
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=username
MAIL_PASSWORD=password
</pre>
</div>
