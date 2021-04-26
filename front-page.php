<?php get_header(); ?>
<section id="section-buy" class="buy">
  <div class="buy__row">
    <div class="buy__window">
      <div class="buy__menu">
        <div id="buy-menu-1" class="buy__menu--item active">Kantor online</div>
        <div id="buy-menu-2" class="buy__menu--item">Kantor stacjonarny</div>
      </div>
      <div class="buy__bigbox">
        <div id="window" class="d-flex px-1 px-md-5 py-4 flex-column flex-lg-row">
          <div class="buy__list">
            <h1 class="buy__list--title"><?php the_field('buy-title') ?></h1>
            <ul class="buy__list--ul">
              <li class="buy__list--li"><?php the_field('buy-list-1') ?></li>
              <li class="buy__list--li"><?php the_field('buy-list-2') ?></li>
              <li class="buy__list--li"><?php the_field('buy-list-3') ?></li>
            </ul>
            <div class="buy__list--contact d-flex">
              <div class="buy__list--contact-icon">
                <a href="tel:<?php the_field('cta-url'); ?>">
                  <i class="fas fa-phone-alt"></i>
                </a>
              </div>
              <div class="d-flex flex-column">
                <div class="buy__list--contact-text">Masz pytania? Zadzwoń do nas!</div>
                <div class="buy__list--contact-text-big">
                  <a href="tel:<?php the_field('cta-url'); ?>"><?php the_field('cta-url'); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php echo do_shortcode('[kanga_form_exchange-app]'); ?>

          <!-- <div class="buy__form active">
            <div class="buy__form--title">
              Sprawdź kurs i zobacz ile z nami zyskasz!
            </div>
            <form action="">
              <div class="buy__form--row">
                <select name="" class="buy__form--control buy__form--select">
                  <option value="pln">PLN</option>
                  <option value="usd">USD</option>
                  <option value="eur">EUR</option>
                </select>
                <input class="buy__form--control buy__form--input" type="text">
              </div>
              <div class="buy__form--row">
                <select name="" class="buy__form--control buy__form--select">
                  <option value="btc">BTC</option>
                  <option value="eth">ETH</option>
                  <option value="link">LINK</option>
                  <option value="usdt">USDT</option>
                  <option value="usdc">USDC</option>
                </select>
                <input class="buy__form--control buy__form--input" type="text">
              </div>
              <div class="buy__form--text">
                Aktualny kurs
                <span class="buy__form--text-color">
                  1 BTC = 211497.13 PLN
                </span>
              </div>
              <div class="buy__form--btngroup">
                <a href="#" class="btn btn-primary-outline">Przelicz</a>
                <a href="#" class="btn btn-primary">Kup online</a>
              </div>
            </form>
          </div> -->
        </div>
        <!-- second card -->
        <div class="buy__map">
          <!-- <div class="location__box row">
            <div class="location__box--text">Lista placówek</div>
            <select class="form-select location__box--select" aria-label="Default select example">
              <option selected>Wyszukaj lub wpisz nazwę miasta</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div> -->
          <div class="location__box">
            <div class="location__box--map" id="map">
              <?php echo do_shortcode('[wp_mapit_map id="156"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="cantors-list-application"></div>
  <script src="apps/offices/static/js/main.a5efd85a.js."></script>
</section>


<section class="features row flex-row justify-content-between">
  <div class="features__box col-md-4">
    <div class="features__box--icon">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
        <g>
          <g xmlns="http://www.w3.org/2000/svg" id="XMLID_806_">
            <g id="XMLID_386_">
              <path id="XMLID_389_" d="M511.005,279.646c-4.597-46.238-25.254-89.829-58.168-122.744 c-28.128-28.127-62.556-46.202-98.782-54.239V77.255c14.796-3.681,25.794-17.074,25.794-32.993c0-18.748-15.252-34-34-34h-72 c-18.748,0-34,15.252-34,34c0,15.918,10.998,29.311,25.793,32.993v25.479c-36.115,8.071-70.429,26.121-98.477,54.169 c-6.138,6.138-11.798,12.577-16.979,19.269c-0.251-0.019-0.502-0.038-0.758-0.038H78.167c-5.522,0-10,4.477-10,10s4.478,10,10,10 h58.412c-7.332,12.275-13.244,25.166-17.744,38.436H10c-5.522,0-10,4.477-10,10s4.478,10,10,10h103.184 c-2.882,12.651-4.536,25.526-4.963,38.437H64c-5.522,0-10,4.477-10,10s4.478,10,10,10h44.54 c0.844,12.944,2.925,25.82,6.244,38.437H50c-5.522,0-10,4.477-10,10s4.478,10,10,10h71.166 c9.81,25.951,25.141,50.274,45.999,71.132c32.946,32.946,76.582,53.608,122.868,58.181c6.606,0.652,13.217,0.975,19.819,0.975 c39.022,0,77.548-11.293,110.238-32.581c4.628-3.014,5.937-9.209,2.923-13.837s-9.209-5.937-13.837-2.923 c-71.557,46.597-167.39,36.522-227.869-23.957c-70.962-70.962-70.962-186.425,0-257.388c70.961-70.961,186.424-70.961,257.387,0 c60.399,60.4,70.529,156.151,24.086,227.673c-3.008,4.632-1.691,10.826,2.94,13.833c4.634,3.008,10.826,1.691,13.833-2.941 C504.367,371.396,515.537,325.241,511.005,279.646z M259.849,44.263c0-7.72,6.28-14,14-14h72c7.72,0,14,6.28,14,14s-6.28,14-14,14 h-1.794h-68.413h-1.793C266.129,58.263,259.849,51.982,259.849,44.263z M285.642,99.296V78.263h48.413v20.997 C317.979,97.348,301.715,97.36,285.642,99.296z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_391_" d="M445.77,425.5c-2.64,0-5.21,1.07-7.069,2.93c-1.87,1.86-2.931,4.44-2.931,7.07 c0,2.63,1.061,5.21,2.931,7.07c1.859,1.87,4.43,2.93,7.069,2.93c2.63,0,5.2-1.06,7.07-2.93c1.86-1.86,2.93-4.44,2.93-7.07 c0-2.63-1.069-5.21-2.93-7.07C450.97,426.57,448.399,425.5,445.77,425.5z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_394_" d="M310.001,144.609c-85.538,0-155.129,69.59-155.129,155.129s69.591,155.129,155.129,155.129 s155.129-69.59,155.129-155.129S395.539,144.609,310.001,144.609z M310.001,434.867c-74.511,0-135.129-60.619-135.129-135.129 s60.618-135.129,135.129-135.129S445.13,225.228,445.13,299.738S384.512,434.867,310.001,434.867z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_397_" d="M373.257,222.34l-49.53,49.529c-4.142-2.048-8.801-3.205-13.726-3.205c-4.926,0-9.584,1.157-13.726,3.205 l-22.167-22.167c-3.906-3.905-10.236-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.142l22.167,22.167 c-2.049,4.142-3.205,8.801-3.205,13.726c0,17.134,13.939,31.074,31.074,31.074s31.074-13.94,31.074-31.074 c0-4.925-1.157-9.584-3.205-13.726l48.076-48.076v0l1.453-1.453c3.905-3.905,3.905-10.237,0-14.142 S377.164,218.435,373.257,222.34z M310.001,310.812c-6.106,0-11.074-4.968-11.074-11.074s4.968-11.074,11.074-11.074 s11.074,4.968,11.074,11.074S316.107,310.812,310.001,310.812z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_399_" d="M212.346,289.616h-9.264c-5.522,0-10,4.477-10,10s4.478,10,10,10h9.264c5.522,0,10-4.477,10-10 S217.868,289.616,212.346,289.616z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_398_" d="M416.92,289.86h-9.265c-5.522,0-10,4.477-10,10s4.478,10,10,10h9.265c5.522,0,10-4.477,10-10 S422.442,289.86,416.92,289.86z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_400_" d="M310.123,212.083c5.522,0,10-4.477,10-10v-9.264c0-5.523-4.478-10-10-10s-10,4.477-10,10v9.264 C300.123,207.606,304.601,212.083,310.123,212.083z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_424_" d="M309.879,387.393c-5.522,0-10,4.477-10,10v9.264c0,5.523,4.478,10,10,10s10-4.477,10-10v-9.264 C319.879,391.87,315.401,387.393,309.879,387.393z" fill="#0172ba" data-original="#000000"></path>
              <path id="XMLID_425_" d="M10,351.44c-2.63,0-5.21,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07c0,2.64,1.069,5.21,2.93,7.07 s4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07s-1.07-5.21-2.931-7.07 C15.21,352.51,12.63,351.44,10,351.44z" fill="#0172ba" data-original="#000000"></path>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <div class="features__box--text"><?php the_field('features__text--1'); ?></div>
  </div>
  <div class="features__box col-md-4">
    <div class="features__box--icon">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 512 512.00215" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
        <g>
          <path xmlns="http://www.w3.org/2000/svg" d="m456.542969 480.90625-9.742188-38.4375c-1.0625-4.195312-5.320312-6.730469-9.515625-5.667969-4.191406 1.0625-6.726562 5.320313-5.667968 9.511719l9.738281 38.433594c.710937 2.804687.097656 5.726562-1.679688 8.007812-1.773437 2.277344-4.449219 3.585938-7.339843 3.585938h-407.355469c-2.890625 0-5.566407-1.308594-7.339844-3.585938-1.777344-2.28125-2.390625-5.203125-1.683594-8.003906l18.910157-74.628906c5.078124-20.058594 19.703124-36.3125 39.113281-43.484375l61.683593-22.785157 48.472657 48.207032c1.523437 1.511718 3.519531 2.277344 5.523437 2.277344 1.835938 0 3.679688-.644532 5.160156-1.941407l33.734376-29.550781 32.28125 29.445312c1.496093 1.363282 3.386718 2.046876 5.273437 2.046876 1.964844 0 3.925781-.734376 5.441406-2.199219l50.03125-48.316407 61.753907 22.8125c19.410156 7.171876 34.035156 23.429688 39.113281 43.488282l2.050781 8.089844c1.0625 4.191406 5.320312 6.726562 9.515625 5.667968 4.191406-1.066406 6.730469-5.324218 5.667969-9.519531l-2.050782-8.082031c-6.347656-25.0625-24.613281-45.375-48.867187-54.335938l-100.078125-36.96875c-4.929688-1.820312-10.347656-1.324218-14.863281 1.363282l-3.558594 2.121093-41.636719 24.789063-39.300781-23.066406-6.355469-3.730469c-.5625-.332031-1.136718-.628907-1.722656-.890625-4.113281-1.835938-8.769531-2.003906-13.046875-.421875l-33.277344 12.292969c-.007812.003906-.019531.007812-.027343.011718l-66.34375 24.503906c-24.253907 8.957032-42.523438 29.269532-48.867188 54.332032l-18.914062 74.632812c-1.902344 7.523438-.257813 15.347656 4.507812 21.46875 4.765625 6.117188 11.945312 9.625 19.699219 9.625h407.355469c7.753906 0 14.933593-3.507812 19.699218-9.625 4.765625-6.121094 6.410156-13.949218 4.507813-21.472656zm-266.546875-105.109375-38.136719-37.925781 21.769531-8.039063c.46875-.175781.984375-.128906 1.414063.125l.960937.5625 39.328125 23.085938zm75.960937-.03125-24.21875-22.09375 28.746094-17.117187 11.347656-6.757813c.433594-.257813.949219-.304687 1.421875-.128906l22.015625 8.128906zm0 0" fill="#0172ba" data-original="#000000"></path>
          <path xmlns="http://www.w3.org/2000/svg" d="m220.828125 390.335938v83.496093c0 4.324219 3.503906 7.832031 7.828125 7.832031 4.328125 0 7.832031-3.507812 7.832031-7.832031v-83.496093c0-4.328126-3.503906-7.832032-7.832031-7.832032-4.324219 0-7.828125 3.503906-7.828125 7.832032zm0 0" fill="#0172ba" data-original="#000000"></path>
          <path xmlns="http://www.w3.org/2000/svg" d="m146.121094 51.917969c1.46875-1.613281 3.007812-3.203125 4.574218-4.734375 21.492188-20.988282 49.933594-32.148438 80.039063-31.488282 28.460937.667969 55.304687 12.207032 75.582031 32.484376 20.277344 20.277343 31.816406 47.121093 32.484375 75.582031.636719 27.074219-8.605469 53.363281-26.023437 74.019531-12.125 14.382812-27.804688 25.507812-45.34375 32.179688-6.050782 2.304687-10.117188 8.164062-10.117188 14.585937v24.25c0 15.816406-12.859375 28.929687-28.664062 29.230469-7.691406.15625-15.054688-2.820313-20.699219-8.359375-5.789063-5.679688-9.113281-13.554688-9.113281-21.605469v-46.359375c0-21.871094 15.761718-40.230469 37.476562-43.648437 11.335938-1.789063 21.925782-7.414063 29.828125-15.84375 2.957031-3.15625 2.796875-8.113282-.359375-11.070313-3.152344-2.953125-8.109375-2.796875-11.066406.359375-5.609375 5.984375-12.816406 9.816406-20.839844 11.082031-29.375 4.628907-50.699218 29.492188-50.699218 59.121094v46.359375c0 12.226562 5.03125 24.175781 13.804687 32.785156 8.464844 8.304688 19.484375 12.847656 31.109375 12.847656.285156 0 .570312-.003906.855469-.007812 24.277343-.464844 44.03125-20.601562 44.03125-44.890625l.023437-24.199219c20.015625-7.613281 37.910156-20.3125 51.746094-36.71875 19.886719-23.582031 30.4375-53.585937 29.710938-84.484375-.765626-32.507812-13.929688-63.152343-37.070313-86.292969-23.136719-23.136718-53.78125-36.300781-86.296875-37.0664058-34.390625-.7968752-66.8125 11.9843748-91.34375 35.9414058-1.78125 1.742188-3.53125 3.550782-5.203125 5.382813-2.914063 3.195313-2.6875 8.148437.507813 11.066406 3.199218 2.914063 8.148437 2.6875 11.066406-.507812zm0 0" fill="#0172ba" data-original="#000000"></path>
          <path xmlns="http://www.w3.org/2000/svg" d="m146.566406 171.316406h.207032c24.640624-.113281 44.691406-20.253906 44.691406-44.898437 0-9.941407 3.917968-19.246094 11.03125-26.199219 7.105468-6.9375 16.507812-10.609375 26.492187-10.40625 19.230469.453125 35.242188 16.464844 35.695313 35.695312.101562 4.324219 3.722656 7.707032 8.011718 7.644532 4.324219-.101563 7.75-3.6875 7.648438-8.011719-.648438-27.46875-23.519531-50.339844-50.996094-50.988281-14.226562-.292969-27.652344 4.957031-37.792968 14.863281-10.160157 9.921875-15.753907 23.207031-15.753907 37.402344 0 16.046875-13.054687 29.164062-29.097656 29.234375-7.621094.039062-14.941406-3.007813-20.464844-8.570313-5.757812-5.800781-9.003906-13.824219-8.90625-22.019531.210938-17.660156 4.398438-34.429688 12.457031-49.84375 2.003907-3.832031.519532-8.566406-3.3125-10.570312-3.832031-2-8.566406-.515626-10.570312 3.3125-9.207031 17.621093-13.996094 36.769531-14.234375 56.917968-.144531 12.363282 4.757813 24.476563 13.453125 33.234375 8.457031 8.523438 19.613281 13.207031 31.441406 13.203125zm0 0" fill="#0172ba" data-original="#000000"></path>
        </g>
      </svg>
    </div>
    <div class="features__box--text"><?php the_field('features__text--2'); ?></div>
  </div>
  <div class="features__box col-md-4">
    <div class="features__box--icon">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
        <g>
          <g xmlns="http://www.w3.org/2000/svg" id="Ecommerce-transfer_money-buy-smartphone-hands" data-name="Ecommerce-transfer money-buy-smartphone-hands">
            <path d="M56.293,14.293l1.414,1.414,4-4a1,1,0,0,0,0-1.414l-4-4L56.293,7.707,58.586,10H47v2H58.586Z" fill="#0172ba" data-original="#000000" class=""></path>
            <path d="M50.293,23.707l1.414-1.414L49.414,20H61V18H49.414l2.293-2.293-1.414-1.414-4,4a1,1,0,0,0,0,1.414Z" fill="#0172ba" data-original="#000000" class=""></path>
            <path d="M60.83,31.17a3.979,3.979,0,0,0-5.41-.21A3.966,3.966,0,0,0,52,29a3.56,3.56,0,0,0-1.31.23,3.839,3.839,0,0,0-1.26.74A4,4,0,0,0,46,28a3.953,3.953,0,0,0-2,.55V12a4,4,0,0,0-4-4,3.953,3.953,0,0,0-2,.55V5a3.009,3.009,0,0,0-3-3H11A3.009,3.009,0,0,0,8,5V25H7a5,5,0,0,0-5,5v4.09L4,55.05V61a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1V55.32L31.72,50h2.15L35,53.17V61a1,1,0,0,0,1,1H56a1,1,0,0,0,1-1V53.17l4.59-12.86A7,7,0,0,0,62,37.96V34A4,4,0,0,0,60.83,31.17ZM26,60H6V56H26Zm.48-6H5.91L4,34V30a3.009,3.009,0,0,1,3-3h7a3,3,0,1,1,0,6H9a1,1,0,0,0-1,1V47a3.009,3.009,0,0,0,3,3H29.28ZM11,48a1,1,0,0,1-1-1V44H28V42H10V35h4a5,5,0,0,0,0-10H10V5a1,1,0,0,1,1-1H35a1,1,0,0,1,1,1V25.56A3.927,3.927,0,0,0,33.99,25,4,4,0,0,0,30,28.99v8.97a7.1,7.1,0,0,0,.41,2.36L33.15,48ZM40,60H37V54h3Zm5,0H42V54h3Zm5,0H47V54h3Zm5,0H52V54h3Zm5-22.04a5.073,5.073,0,0,1-.29,1.68L55.3,52H36.7L32.29,39.65A5.176,5.176,0,0,1,32,37.96V28.99A2,2,0,0,1,36,29v8h2V12a2.015,2.015,0,0,1,2-2,2.006,2.006,0,0,1,2,2V37h2V32a2.015,2.015,0,0,1,2-2,2.006,2.006,0,0,1,2,2v5h2V33a1.983,1.983,0,0,1,.59-1.41,1.8,1.8,0,0,1,.77-.48A1.868,1.868,0,0,1,52,31a2.006,2.006,0,0,1,2,2v5h2V34a2.006,2.006,0,0,1,2-2,2.015,2.015,0,0,1,2,2Z" fill="#0172ba" data-original="#000000" class=""></path>
            <path d="M23,6A10,10,0,1,0,33,16,10.016,10.016,0,0,0,23,6Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,23,24Z" fill="#0172ba" data-original="#000000" class=""></path>
            <path d="M26,18a3.01,3.01,0,0,1-2,2.82V22H22V20.82A3.01,3.01,0,0,1,20,18h2a1,1,0,1,0,1-1,3,3,0,0,1-1-5.82V10h2v1.18A3.01,3.01,0,0,1,26,14H24a1,1,0,1,0-1,1A3.009,3.009,0,0,1,26,18Z" fill="#0172ba" data-original="#000000" class=""></path>
          </g>
        </g>
      </svg>
    </div>
    <div class="features__box--text"><?php the_field('features__text--3'); ?></div>
  </div>
</section>


<!-- ////////////////////////////////////////////////////////////////////////// -->
<section class="pricing">
  <!-- <div id="select-rates-application"></div>
  <div class="pricing__box col">
    <form action="">
      <select class="buy__form--control pricing__select" name="" id="">
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
        <option value="">PLN/EUR</option>
      </select>
    </form>
    <div class="pricing__textbox">
      <div class="pricing__textbox--text">kupisz za</div>
      <div class="pricing__textbox--text">sprzedasz za</div>
    </div>
    <div class="pricing__textbox">
      <div class="pricing__textbox--price">211 955,60 zł</div>
      <div class="pricing__textbox--price">202 214,68 zł</div>
    </div>
    <div class="pricing__paragraph">Podane ceny obowiązują w bankomatach i wpłatomatach na terenie całej Polski. W kantorach stacjonarnych kurs ustalany jest indywidualnie. Zachęcamy do negocjacji cen.</div>
  </div> -->
  <div id="select-rates-application"></div>
  <script src="apps/rates/static/js/main.cba10ca1.js"></script>
</section>
<!-- ////////////////////////////////////////////////////////////////////////// -->



<section id="section-app" class="app row">
  <div class="offset-2 col-8 offset-md-0 col-md-6 col-lg-5 app__photo">
    <?php
    $appPhoto = get_field('app__photo');
    ?>
    <img class="app__photo--img" src="<?php echo $appPhoto['url'] ?>" alt="<?php echo $appPhoto['alt'] ?>">
  </div>
  <div class="col-md-6 offset-lg-1 ">
    <div class="app__text">
      <h3 class="app__text--title"><?php the_field('app__text--title') ?></h3>
      <ul class="app__text--ul">
        <li class="app__text--li"><?php the_field('app__text--list-1') ?></li>
        <li class="app__text--li"><?php the_field('app__text--list-2') ?></li>
        <li class="app__text--li"><?php the_field('app__text--list-3') ?></li>
        <li class="app__text--li"><?php the_field('app__text--list-4') ?></li>
        <li class="app__text--li"><?php the_field('app__text--list-5') ?></li>
      </ul>
      <h3 class="app__text--paragraph"><?php the_field('app__text--paragraph-1') ?></h3>
      <div class="app__buttons">
        <a href="<?php the_field('app__button1--url') ?>" class="btn btn-primary">
          <?php the_field('app__button1--text') ?>
        </a>
        <a href="<?php the_field('app__button2--url') ?>" class="btn btn-secondary">
          <?php the_field('app__button2--text') ?>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="section-contact" class="contact row flex-column flex-md-row">
  <div class="contact__col col-md-6 offset-0 col-xxl-5 offset-xxl-1">
    <h3 class="contact__subtitle"><?php the_field('contact__subtitle') ?></h3>
    <h2 class="contact__title"><?php the_field('contact__title') ?></h2>
    <p class="contact__text"><?php the_field('contact__paragraph--1') ?></p>
    <p class="contact__text"><?php the_field('contact__paragraph--2') ?></p>
  </div>
  <div class="contact__col col-xxl-5  col-md-6 justify-content-center align-items-center">
    <?php echo do_shortcode('[contact-form-7 id="74" title="Formularz 1"]'); ?>
  </div>
</section>

<section class="cards">

  <div class="row gy-5">
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card1-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card1-title') ?></h3>
      <p class="cards__text"><?php the_field('card1-text') ?></p>
    </div>
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card2-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card2-title') ?></h3>
      <p class="cards__text"><?php the_field('card2-text') ?></p>
    </div>
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card3-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card3-title') ?></h3>
      <p class="cards__text"><?php the_field('card3-text') ?></p>
    </div>
  </div>

  <div class="row">
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card4-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card4-title') ?></h3>
      <p class="cards__text"><?php the_field('card4-text') ?></p>
    </div>
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card5-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card5-title') ?></h3>
      <p class="cards__text"><?php the_field('card5-text') ?></p>
    </div>
    <div class="col cards__box">
      <!-- icon -->
      <?php
      $cardIcon = get_field('card6-icon');
      ?>
      <div class="cards__icon">
        <img class="cards__icon--img" src=" <?php echo $cardIcon['url'] ?>" alt="<?php echo $cardIcon['alt'] ?>">
      </div>
      <!-- end icon -->
      <h3 class="cards__title"><?php the_field('card6-title') ?></h3>
      <p class="cards__text"><?php the_field('card6-text') ?></p>
    </div>
  </div>

</section>

<section class="mcards">
  <div class="row">
    <div class="col mcards__box">
      <h3 class="mcards__title"><?php the_field('mcard1-title') ?></h3>
      <p class="mcards__text"><?php the_field('mcard1-text') ?></p>
    </div>
    <div class="col mcards__box">
      <h3 class="mcards__title"><?php the_field('mcard2-title') ?></h3>
      <p class="mcards__text"><?php the_field('mcard2-text') ?></p>
    </div>
    <div class="col mcards__box">
      <h3 class="mcards__title"><?php the_field('mcard3-title') ?></h3>
      <p class="mcards__text"><?php the_field('mcard3-text') ?></p>
    </div>
  </div>
  <a class="btn btn-primary" href="tel:<?php the_field('cta-url'); ?>">
    <i class="fas fa-phone-alt navbar__cta--icon"></i>
    <?php the_field('cta-text'); ?>
  </a>
</section>


<?php get_footer(); ?>