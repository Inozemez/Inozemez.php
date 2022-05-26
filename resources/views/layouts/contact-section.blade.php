    <!-- ======= Contact Section ======= -->

    @include('layouts.contact-section')

</section><!-- End Contact Section -->

  </main><!-- End #main -->

    
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Зв'язатися з нами</h2>
          <p>Зателефонуйте, або напишіть повідомлення, щоб отримати допомогу з реєстрацією.</p>
        </div>


        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@inozemez.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+39 320 46 36 129</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ваше ім'я" data-rule="minlen:4" data-msg="Будь ласка, введіть принаймні 4 символи" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Ваша електронна адреса" data-rule="email" data-msg="Введіть дійсну електронну пошту" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема" data-rule="minlen:4" data-msg="Будь ласка, введіть принаймні 5 символів для Теми" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Будь ласка, напишіть нам щось" placeholder="Повідомлення"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Завантаження</div>
                <div class="error-message"></div>
                <div class="sent-message">Ваше повідомлення надіслано. Дякую!</div>
              </div>
              <div class="text-center"><button type="submit">Надіслати повідомлення</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
