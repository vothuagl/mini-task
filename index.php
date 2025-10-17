<?php include_once "_config/meta.php"; ?>

<!doctype html>
<html lang="ja" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns#">
  <?= $HTML['pageHeaderJsCss']; ?>
  <link href="<?= $top_url; ?>lib/swiper/css/swiper.min.css" rel="stylesheet" type="text/css">
  <link href="<?= $top_url; ?>assets/css/top.css" rel="stylesheet" type="text/css">
</head>

<body id="body">
  <div class="wrapper">
    <?php include('./_part/header.php'); ?>
    <main id="main">
      <div class="container">
        <h2 class="todo">📓 Todo List</h2>
        <div class="todo_wrapper">
          <input type="text" placeholder="Write your todos here..." id="todoInput">
          <div class="todo_list">

          </div>
          <div class="todo_figures">
            <div><span class="todo_number">0</span> item(s) left</div>
            <button class="btn btn-all">all</button>
            <button class="btn btn-active">active</button>
            <button class="btn btn-completed">completed</button>
            <button class="btn btn-clear">Clear completed</button>
          </div>
        </div>
      </div>
      <div class="container modalSection">
        <h2>Modals:</h2>
        <div class="modals">
          <div class="modal-tab" data-modal="1">
            Show modal 1
          </div>
          <div class="modal-tab" data-modal="2">
            Show modal 2
          </div>
          <div class="modal-tab" data-modal="3">
            Show modal 3
          </div>
        </div>
        <div class="modal hidden" id="1">
          <span class="close">&times;</span>
          <div class="card">
            <div class="card__top MoveUp">
              <h2 class="card__heading">Content modal 1</h2>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot11.jpg.webp" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot12.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot13.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="card__content MoveUp">
              <h3 class="card__title">
                ヌチドゥタカラの家
              </h3>
              <p class="text">
                戦中・戦後の土地闘争の証拠品や写真を展示し、戦争の本賀や原因を学ぶ資料館です。
              </p>
              <a href="#" class="card__map" target="_blank">
                <span class="card__mapText">沖縄県国頭郡伊江村字東江前2300-4</span>
              </a>
              <div class="card__info">
                <button class="card__link next">
                  Next modal
                  <span class="card__arrow"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal hidden" id="2">
          <span class="close">&times;</span>
          <div class="card">
            <div class="card__top MoveUp">
              <h2 class="card__heading">Content modal 2</h2>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot11.jpg.webp" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot12.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot13.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="card__content MoveUp">
              <h3 class="card__title">
                ヌチドゥタカラの家
              </h3>
              <p class="text">
                戦中・戦後の土地闘争の証拠品や写真を展示し、戦争の本賀や原因を学ぶ資料館です。
              </p>
              <a href="#" class="card__map" target="_blank">
                <span class="card__mapText">沖縄県国頭郡伊江村字東江前2300-4</span>
              </a>
              <div class="card__info">
                <button class="card__link next">
                  Next modal
                  <span class="card__arrow"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal hidden" id="3">
          <span class="close">&times;</span>
          <div class="card">
            <div class="card__top MoveUp">
              <h2 class="card__heading">Content modal 3</h2>
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot11.jpg.webp" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot12.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="card__imgBox">
                      <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot13.jpg" alt="ヌチドゥタカラの家">
                    </figure>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="card__content MoveUp">
              <h3 class="card__title">
                ヌチドゥタカラの家
              </h3>
              <p class="text">
                戦中・戦後の土地闘争の証拠品や写真を展示し、戦争の本賀や原因を学ぶ資料館です。
              </p>
              <a href="#" class="card__map" target="_blank">
                <span class="card__mapText">沖縄県国頭郡伊江村字東江前2300-4</span>
              </a>
              <div class="card__info">
              </div>
            </div>
          </div>
        </div>
        <div class="overlay hidden">
        </div>
      </div>
      <div class="container">
        <h2>Tab:</h2>
        <div class="tabs">
          <div class="tab is-active" data-tab="all">
            All area
          </div>
          <div class="tab" data-tab="saijo">
            Saijo
          </div>
          <div class="tab" data-tab="akitsu">
            Akitsu
          </div>
        </div>
        <div class="spot">
          <div class="spot__wrapper is-open" id="all">
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">1</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot11.jpg.webp" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot12.jpg" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot13.jpg" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  ヌチドゥタカラの家
                </h3>
                <p class="text">
                  戦中・戦後の土地闘争の証拠品や写真を展示し、戦争の本賀や原因を学ぶ資料館です。
                </p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県国頭郡伊江村字東江前2300-4</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 9:00～17:00<br>
                    休館日 水曜(年末年始は除く)<br>
                    TEL 0980-49-30471
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">2</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot21.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot22.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot23.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  沖縄愛楽園交流会館
                </h3>
                <p class="text">
                  ハンセン病と向き合った人々の歴史や暮らし、尊厳を伝え、差別や偏見のない社会について考える資料館です。
                </p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県名護市済井出1192</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 10:00～17:00<br>
                    休館日 月曜・祝日・年末年始<br>
                    TEL 0980-52-8453
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">3</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot31.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot32.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot33.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  佐喜眞美術館
                </h3>
                <p class="text">普天間基地の一角に建ち、「もの想う空間」として沖縄戦の記憶と平和への祈りを、アート作品を通して多くの人に伝える美術館です。</p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県宜野湾市上原358</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 9:30～17:00<br>
                    休館日 火曜・旧盆・年末年始<br>
                    TEL 098-893-5737
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">4</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot41.jpg" alt="不屈館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot42.jpg" alt="不屈館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot43.jpg" alt="不屈館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  不屈館
                </h3>
                <p class="text">平和と民主主義のために共にたたかい続けた瀬長亀次郎と沖縄の民衆の歩みを次世代に伝える資料館です。</p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県那覇市若狭2丁目21-5</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 10:00～17:00<br>
                    休館日 月曜・火曜・年末年始<br>
                    TEL 098-943-8374
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="spot__wrapper" id="saijo">
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">1</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot11.jpg.webp" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot12.jpg" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot13.jpg" alt="ヌチドゥタカラの家">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  ヌチドゥタカラの家
                </h3>
                <p class="text">
                  戦中・戦後の土地闘争の証拠品や写真を展示し、戦争の本賀や原因を学ぶ資料館です。
                </p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県国頭郡伊江村字東江前2300-4</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 9:00～17:00<br>
                    休館日 水曜(年末年始は除く)<br>
                    TEL 0980-49-30471
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">2</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot21.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot22.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot23.jpg" alt="沖縄愛楽園交流会館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  沖縄愛楽園交流会館
                </h3>
                <p class="text">
                  ハンセン病と向き合った人々の歴史や暮らし、尊厳を伝え、差別や偏見のない社会について考える資料館です。
                </p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県名護市済井出1192</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 10:00～17:00<br>
                    休館日 月曜・祝日・年末年始<br>
                    TEL 0980-52-8453
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="spot__wrapper" id="akitsu">
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">3</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot31.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot32.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot33.jpg" alt="佐喜眞美術館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  佐喜眞美術館
                </h3>
                <p class="text">普天間基地の一角に建ち、「もの想う空間」として沖縄戦の記憶と平和への祈りを、アート作品を通して多くの人に伝える美術館です。</p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県宜野湾市上原358</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 9:30～17:00<br>
                    休館日 火曜・旧盆・年末年始<br>
                    TEL 098-893-5737
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card__top MoveUp">
                <div class="card__tag">
                  <span class="card__number">4</span>
                  SPOT
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot41.jpg" alt="不屈館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot42.jpg" alt="不屈館">
                      </figure>
                    </div>
                    <div class="swiper-slide">
                      <figure class="card__imgBox">
                        <img loading="lazy" class="c-image" src="<?= $top_url; ?>assets/img/top/spot43.jpg" alt="不屈館">
                      </figure>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="card__content MoveUp">
                <h3 class="card__title">
                  不屈館
                </h3>
                <p class="text">平和と民主主義のために共にたたかい続けた瀬長亀次郎と沖縄の民衆の歩みを次世代に伝える資料館です。</p>
                <a href="#" class="card__map" target="_blank">
                  <span class="card__mapText">沖縄県那覇市若狭2丁目21-5</span>
                </a>
                <div class="card__info">
                  <div class="card__detail">
                    開館時間 10:00～17:00<br>
                    休館日 月曜・火曜・年末年始<br>
                    TEL 098-943-8374
                  </div>
                  <a target="_blank" href="#" class="card__link">
                    公式サイトはこちら
                    <span class="card__arrow"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h2>FAQ:</h2>
        <ul class="tabs">
          <li class="tab-faq" data-faq="faq1">Brewery Street</li>
          <li class="tab-faq" data-faq="faq2">Food & Shopping</li>
          <li class="tab-faq" data-faq="faq3">Transportation</li>
          <li class="tab-faq" data-faq="faq4">Others</li>
        </ul>
        <div class="faq_section" id="faq1">
          Brewery Street
          <div class="faq_content">
            <div class="faq_question">
              Are there any English-speaking tours available on Saijo Sake Brewery Street?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Various tours, including sake tasting experiences tailored for international visitors, are available
            </p>
          </div>
          <div class="faq_content">
            <div class="faq_question">
              Are there any English-speaking tours available on Saijo Sake Brewery Street?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Various tours, including sake tasting experiences tailored for international visitors, are available
            </p>
          </div>
        </div>
        <div class="faq_section hidden" id="faq2">
          Food & Shopping
          <div class="faq_content">
            <div class="faq_question">
              Dummy text Dummy text Dummy text Dummy text?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, sequi aliquid vitae porro fugiat quos commodi maxime minus. Ut fugit maxime ex, obcaecati inventore quibusdam corporis rerum architecto repudiandae fuga.
            </p>
          </div>
          <div class="faq_content">
            <div class="faq_question">
              Dummy text Dummy text Dummy text Dummy text?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, sequi aliquid vitae porro fugiat quos commodi maxime minus. Ut fugit maxime ex, obcaecati inventore quibusdam corporis rerum architecto repudiandae fuga.
            </p>
          </div>
        </div>
        <div class="faq_section hidden" id="faq3">
          Transportation
          <div class="faq_content">
            <div class="faq_question">
              Are there any English-speaking tours available on Saijo Sake Brewery Street?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Various tours, including sake tasting experiences tailored for international visitors, are available
            </p>
          </div>
          <div class="faq_content">
            <div class="faq_question">
              Are there any English-speaking tours available on Saijo Sake Brewery Street?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Various tours, including sake tasting experiences tailored for international visitors, are available
            </p>
          </div>
        </div>
        <div class="faq_section hidden" id="faq4">
          Others
          <div class="faq_content">
            <div class="faq_question">
              Dummy text Dummy text Dummy text Dummy text?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, sequi aliquid vitae porro fugiat quos commodi maxime minus. Ut fugit maxime ex, obcaecati inventore quibusdam corporis rerum architecto repudiandae fuga.
            </p>
          </div>
          <div class="faq_content">
            <div class="faq_question">
              Dummy text Dummy text Dummy text Dummy text?
              <div class="faq_icon">
              </div>
            </div>
            <p class="faq_answer">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, sequi aliquid vitae porro fugiat quos commodi maxime minus. Ut fugit maxime ex, obcaecati inventore quibusdam corporis rerum architecto repudiandae fuga.
            </p>
          </div>
        </div>
      </div>
  </div>
  </main>

  <?php include('./_part/footer.php'); ?>

  </div>
  <?= $HTML['pageFooterJs']; ?>
  <script src="<?= $top_url; ?>lib/swiper/js/swiper.min.js?<?= $time; ?>"></script>
  <script src="<?= $top_url; ?>assets/js/index.js?<?= $time; ?>"></script>
</body>

</html>
