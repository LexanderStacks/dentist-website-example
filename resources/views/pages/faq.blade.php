    <!-- Test -->
    <div class="row py-5 text-start">
        <div class="col-12">
            @foreach($posts as $post)
            <h1 class="fw-bold">
                {!! $post->title !!}
            </h1>
            <p>
                {!! $post->content !!}
            </p>
            @endforeach 
        </div>
    </div>
    <!-- ./ Test -->

        <!-- Start FAQ Area -->
        <section class="faq-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        <i class="bi bi-hash fs-4 text-primary"></i>
                        Oft gestellte Fragen
                    </span>
                    <h2>Beispiel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                </div>

                <div class="faq-accordion">
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-title active">
                                <i class='bx bx-plus'></i>
                                Beispielfrage?
                            </div>

                            <div class="accordion-content show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <i class='bx bx-plus'></i>
                                Beispielfrage?
                            </div>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-title">
                                <i class='bx bx-plus'></i>
                                Beispielfrage?
                            </div>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-title">
                                <i class='bx bx-plus'></i>
                                Beispielfrage?
                            </div>

                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ Area -->
        