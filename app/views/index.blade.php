@extends('layouts.master')

@section('content')
<!-- header -->
<header id="header" role="header">
    <div class="boxed">
        <!-- tagline -->
        <div id="tagline" class="animated bounceInUp">
            <h1>Web Sanatçılarının PHP Framework'ü.</h1>
            <h2>Can Yakmayan PHP. Mutlu Kodlayın ve Temiz Havanın Tadını Çıkarın.</h2>
        </div>
        <!-- /tagline -->

        <!-- callto action -->
        <div id="callto" class="animated bounceInLeft">
            <a href="docs/quick" class="button large animated shake">Hemen Başla</a>
            <a href="http://conference.laravel.com" class="button large animated shake">Laracon 2014</a>
        </div>
        <!-- /callto action -->

        <!-- ui -->
        <div class="animated fadeIn" id="header_image" style="background: url(assets/img/sublime.png) top center no-repeat;"></div>
        <!-- /ui -->
    </div>
</header>
<!-- /header -->

<!-- nav -->
<nav id="primary">
    <div class="boxed">
        <div id="logo-head">
           <a href="//laravel.gen.tr"><img src="assets/img/logo-head.png" alt="Laravel" /></a>
        </div>
        <ul>
            <li class="current-item"><a href="#">Hoşgeldiniz</a></li>
            <li><a href="docs" title="Dokümantasyon">Dokümantasyon</a></li>
            <li><a href="//github.com/laravel-tr" title="Github">Github</a></li>
            <li><a href="http://forum.laravel.gen.tr" title="Laravel Forums">Forum</a></li>
            <li><a href="http://twitter.com/laraveltr" title="Twitter'da Laravel">Twitter</a></li>
        </ul>
    </div>
</nav>
<!-- /nav -->

<!-- content -->
<div id="content">

    <!-- page -->
    <section id="page">
        <article class="boxed">
            <ul class="feature-box nolist">
                <li class="one_quarter">
                    <h2><i class="icon-random"></i> <a title="REST Destekli Rotalar" href="docs/routing">REST Destekli Rotalar</a></h2>
                    <p>Uygulamanıza gelen sorguları cevaplamak için basit Closure'lar kullanın. Harika uygulamalar yazmaya başlamak daha kolay olamazdı.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-graph"></i> <a title="Verilerinize Hükmedin" href="docs/eloquent">Verilerinize Hükmedin</a></h2>
                    <p>Laravel muhteşem Eloquent ORM ve harika bir migrasyon sistemiyle birlikte gelir. MySQL, PostgreSQL, SQL Server ve SQLite ile sorunsuz çalışır.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-pencil-alt"></i> <a title="Zarif Tasarım Şablonları" href="docs/templates">Zarif Tasarım Şablonları</a></h2>
                    <p>İster düz PHP, isterseniz de hafif Blade şablon motorunu kullanın. Blade, harika şablon kalıtımı sağlar ve son derece hızlıdır. Blade'e aşık olacaksınız.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-time"></i> <a title="Yarınlar İçin" href="docs/routing">Yarınlar İçin</a></h2>
                    <p>İster devasa kurumsal uygulamalar geliştirin, isterseniz basit JSON API'ları oluşturun. İster güçlü denetçiler isterseniz de zayıf REST destekli rotalar yazın. Laravel her boyuttaki işleriniz için mükemmeldir.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-cog"></i> <a title="Kanıtlanmış Temel" href="http://www.symfony.com">Kanıtlanmış Temel</a></h2>
                    <p>Laravel, birçok Symfony bileşeninin üzerine kurulmuştur. Bu sayede uygulamanıza test edilmiş ve güvenilir bir kod temeli sağlar.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-star"></i> <a title="Composer'la Güçlendirilmiş" href="http://getcomposer.org">Composer'la Güçlendirilmiş</a></h2>
                    <p>Composer, uygulamanızın üçüncü parti paketlerini kontrol etmek için harika bir araçtır. Packagist'ten istediğiniz paketleri bulup saniyeler içinde kullanmaya başlayabilirsiniz.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-group"></i> <a title="Harika Topluluk" href="http://laravel.io/forum">Harika Topluluk</a></h2>
                    <p>PHP'ye yeni de başlasanız, mimari astronotu da olsanız Laravel'e uyum sağlarsınız. IRC odalarında fikirlerinizi tartışabilir veya forumlarda sorularınızı sorabilirsiniz.</p>
                </li>
                <li class="one_quarter">
                    <h2><i class="icon-wrench"></i> <a title="Red, Green, Refactor" href="docs/testing">Red, Green, Refactor</a></h2>
                    <p>Laravel, test edilebilirliği düşünerek geliştirilmiştir. IoC ile esnek kalıp PHPUnit ile testlerinizi çalıştırın. Endişelenmeyin... Düşündüğünüzden daha kolay.</p>
                </li>
            </ul>
        </article>
    </section>
    <!-- /page -->

</div>
<!-- /content -->

<!-- sponsors -->
<section id="sponsors">
   <article class="boxed">
	   <ul id="sponsor" class="nolist textcenter aligncenter">
	       <li class="animated fadeInDown">
	           <div class="sponsor">
	               <p>Laravel topluluğunun sponsoru Cartalyst, Laravel'in ücretli eklentileri konusunda liderdir. Yüksek kaliteli bileşen depoları uygulamanızı sonraki aşamaya taşır.</p>
	           </div>
	           <div class="sponsor-logo">
	               <a href="//cartalyst.com" title="Cartalyst" target="_blank">
	                   <img src="assets/img/sponsors/cartalyst.png" alt="Cartalyst" />
	               </a>
	           </div>
	       </li>
	   </ul>
   </article>
</section>
<!-- /sponsors -->

<!-- quotes -->
<section id="quotes">
   <article class="boxed">
       <ul id="quote" class="nolist textcenter aligncenter">
           <li class="animated flipInX">
               <div class="quote"><p>Laravel ile yazılım geliştirme daha eğlenceli ve acısız.</p></div>
               <div class="person">Can Geliş</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Daha çok kod yazıp daha az geliştirme yapmaktan sıkıldıysanız Laravel'e bir göz atın.</p></div>
               <div class="person">Resul Aslan</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Bir sanat eseri için resim veya müzikte yetenekli olmanıza gerek yok, Laravel öğrenin!</p></div>
               <div class="person">Oğuzhan Selçuk Bülbül</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Bütün php frameworkleri berbattır, Laravel hepsinden berbat!</p></div>
               <div class="person">Sergin Arı</div>
           </li>
           <li class="animated flipInX">
               <div class="quote"><p>Laravel ile kodlamak, şiir yazmak gibi...</p></div>
               <div class="person">Sinan Eldem</div>
           </li>
       </ul>
   </article>
</section>
<!-- /quotes -->

<!-- footer -->
<footer id="foot" class="textcenter">
    <div class="boxed">

        <!-- nav -->
        <nav id="secondary">
            <div id="logo-foot">
	           <a href="//laravel.gen.tr"><img src="assets/img/logo-foot.png" alt="Laravel" /></a>
	        </div>
            <ul>
                <li class="current-item"><a href="#">Hoşgeldiniz</a></li>
                <li><a href="docs" title="Dokümantasyon">Dokümantasyon</a></li>
                <li><a href="//github.com/laravel-tr" title="Github">Github</a></li>
                <li><a href="http://forum.laravel.gen.tr" title="Laravel Forums">Forum</a></li>
                <li><a href="http://twitter.com/laraveltr" title="Twitter'da Laravel">Twitter</a></li>
            </ul>
        </nav>
        <!-- /nav -->

    </div>
</footer>
<!-- /footer -->

<!-- to the top -->
<div id="top">
    <a href="#index" title="Yukarı çık">
        <i class="icon-chevron-up"></i>
    </a>
</div>
<!-- /to the top -->
@endsection
