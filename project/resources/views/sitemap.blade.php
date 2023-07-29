<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);  
  $datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>
 
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{{ URL::to('/') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>
  <url>
    <loc>{{ URL::to('company-profile') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>{{ URL::to('visi-dan-misi') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>{{ URL::to('our-customer') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>{{ URL::to('our-machine') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>{{ URL::to('career') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  <url>
    <loc>{{ URL::to('contact-us') }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  @foreach ($data_jp as $jp)
  <url>
    <loc>{{ URL::to('/')."/".strtolower($jp->jenis_produk) }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  @endforeach

  @foreach ($data_produk as $produk)
  <url>
    <loc>{{ URL::to('/')."/view/".$produk->slug }}</loc>
    <lastmod>{{ $datetime1->format(DATE_ATOM) }}</lastmod>
    <changefreq>daily</changefreq>
    <priority>0.80</priority>
  </url>
  @endforeach
</urlset>