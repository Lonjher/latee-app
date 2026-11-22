<x-layouts::guest title="Pondok Pesantren Annuqayah Latee — P2AL">

    <!-- BEGIN: MainHeader -->
    @include('partials.header')

    <main>
        <!-- ============================================ -->
        <!-- BEGIN: Hero Section                          -->
        <!-- ============================================ -->
        <livewire:welcome.home-hero />

        <!-- ============================================ -->
        <!-- BEGIN: Partner Trust Bar                     -->
        <!-- ============================================ -->
        <livewire:welcome.home-trust-bar />

        <!-- ============================================ -->
        <!-- BEGIN: Unit Pendidikan                       -->
        <!-- ============================================ -->
        <livewire:welcome.home-education />

        <!-- ============================================ -->
        <!-- BEGIN: Alur Pendaftaran                      -->
        <!-- ============================================ -->
        <livewire:welcome.home-registration-steps />

        <!-- ============================================ -->
        <!-- BEGIN: Info Pendaftaran                      -->
        <!-- ============================================ -->
        <livewire:welcome.home-registration-info />

        <!-- ============================================ -->
        <!-- BEGIN: About & Metrics                       -->
        <!-- ============================================ -->
        <livewire:welcome.home-about />

        <!-- ============================================ -->
        <!-- BEGIN: Fasilitas                             -->
        <!-- ============================================ -->
        <livewire:welcome.home-facilities />

        <!-- ============================================ -->
        <!-- BEGIN: News & Blog                           -->
        <!-- ============================================ -->
        <livewire:welcome.home-posts />

        <!-- ============================================ -->
        <!-- BEGIN: Testimonials / Serambi Pengasuh       -->
        <!-- ============================================ -->
        <livewire:welcome.home-quotes />

        <!-- ============================================ -->
        <!-- BEGIN: CTA Badge Bar                         -->
        <!-- ============================================ -->
        <livewire:welcome.home-cta />
    </main>

    <!-- BEGIN: MainFooter -->
    @include('partials.footer')

</x-layouts::guest>
