<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">


      <url>
         <loc>{{url('/fabrication')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/spacebooking')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/search')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/Great-exhibition-to-exhibit')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/magazine')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/directory')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>

      <url>
         <loc>{{url('/add-your-event/add-your-event')}}</loc>
         <priority>1.0</priority>
         <lastmod>2024-04-07</lastmod>
         <changefreq>daily</changefreq>
      </url>


   @foreach ($postie as $sitemap)
      <url>
         <loc>{{url('/ex/'.$sitemap->slug)}}</loc>
         <priority>0.7</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemap->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
   @endforeach

   @foreach ($postie as $sitemap)
      <url>
         <loc>{{url('/rating/'.$sitemap->slug)}}</loc>
         <priority>0.7</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemap->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
   @endforeach

   @foreach ($categoryresult as $sitemap)
      @php
         $findupdated = DB::table('expos')->where('tag', $sitemap->Category)->get();
         $findSlug = $findupdated->pluck('slug');
         $findSl = $findupdated->pluck('updated_at');
      @endphp
      
      @foreach ($findupdated as $sitemapo)
      <url>
         <loc>{{url('/exhibition/expo/'.$sitemapo->slug)}}</loc>
         <priority>0.3</priority>
         <lastmod>{{gmdate('Y-m-d\TH:i:s\Z',strtotime($sitemapo->updated_at))}}</lastmod>
         <changefreq>daily</changefreq>
      </url>
      @endforeach
   @endforeach

  
</urlset>

