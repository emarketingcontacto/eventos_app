<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Todo Fiestas León",
  "image": "{{ asset('images/party-1.jpg') }}",
  "@id": "{{ url()->current() }}",
  "url": "{{ config('app.url') }}",
  "telephone": "+52{{ $negocio->negocio_telefono }}",
  "priceRange": "$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Cto. Hoja de Nogal 182",
    "addressLocality": "León de los Aldama",
    "addressRegion": "GTO",
    "postalCode": "37669",
    "addressCountry": "MX"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.173196740651697,
    "longitude": -101.76084301338301
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
      "opens": "09:00",
      "closes": "19:00"
    }
  ]
}
</script>
