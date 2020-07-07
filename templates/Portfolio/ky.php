<?= $this->Html->css('/css/google.font.css') ?>
<?= $this->Html->css('/css/portfolio.css') ?>
<?= $this->Html->css('/css/portfolio.ky.css') ?>
<?= $this->Html->css('/css/portfolio.animations.css') ?>
<?= $this->Html->css('/css/components.css') ?>

<script src="/js/vue.js"></script>
<script src="/js/vue-slide-up-down.umd.js"></script>
<script src="/js/components.js"></script>

<div class="main-section">
  <div id="mainTabs">
    <ul class="tab">
        <li @click="changeTab(1)" @keyup.enter="changeTab(1)" :class="{active:active(1)}" tabindex="0">Introduction</li>
        <li @click="changeTab(2)" @keyup.enter="changeTab(2)" :class="{active:active(2)}" tabindex="1">Career＆Skills</li>
        <!-- <li @click="changeTab(3)" @keyup.enter="changeTab(3)" :class="{active:active(3)}" tabindex="2">スキルセット</li> -->
        <li @click="changeTab(4)" @keyup.enter="changeTab(4)" :class="{active:active(4)}" tabindex="3">Others</li>
    </ul>
    <div id="contentVue" class="content-vue">
        <transition>
          <!----------------------->
          <!-- start tabContent1 -->
          <!----------------------->
          <section :key="1" v-if="active(1)">
            <div class="tab-content">
              <div class="profile-top">
                <div class="first">
                  <p>
                    <!-- 開発をもっと楽しく、もっと先に。 -->
                  </p>
                </div>
                <!-- first -->
                <div class="second">
                  <p style="font-size:140%;">Kohei Yamamoto's Portfolio</p>
                </div>
                <!-- /second -->
                <div class="third">
                  <p style="font-size:120%;">
                    閲覧いただきありがとうございます。<br>
                    本ページは「Kohei Yamamoto」のポートフォリオページとなります。<br><br>
                    経歴や保有スキル、基本理念から <span style="font-size:120%; color:red">どんな人間なのか</span> をご紹介できたら幸いです。
                  </p>
                </div>
                <!-- /third -->
              </div>
              <!-- /profile-top -->

              <div class="stripe-pink" style="margin: 0 10%; margin-top: 5%;">
                  <div class="stripe-green-inner" style="text-align: center;">
                    <p style="font-size:170%;">自己紹介</p>
                  </div>
                <!-- /stripe-blue-inner -->
                </div>

                <p class="profile-text" style="font-size:140%; margin-top:5%;">
                  1995年12月8日生<br><br>
                  福岡県北九州市にある山と川と海に囲まれた田舎町出身。幼少時代の遊びは山中で不法投棄されたガラクタを使って秘密基地を作ること。<br><br>
                  小・中学校は地元の公立校に進学。有名私立中学を受験したものの、コテンパンに打ちのめされた事実を友人にひた隠しにしながら中学時代を過ごす。<br><br>
                  高校は佐賀県唐津市にある学校に進学。その過酷さから、毎月のように脱獄ならぬ脱寮者が出る寮で３年間生活し、忍耐力を身につける。<br><br>
                  大学から東京に上京。商学部でマーケティングを専攻しながら学生ビジネスコンテストに複数参加。そこでの功績を認められて大学総長賞を受賞する。サークル活動ではマレーシア人の友人に誘われて和太鼓サークルに入会。持ち前の顔の濃さで、その友人ではなく自分が海外留学生だと誤解される日々を過ごす。<br><br>
                  大学卒業後は新卒で保険会社に入社し、営業として配属される。持ち前のコミュニケーション力で支社一番の営業成績を上げるも、ITの世界に魅せられエンジニアに転身。<br>
                  現在に至る。
                </p>

              <div class="stripe-green" style="margin: 0 10%; margin-top: 10%;">
                <div class="stripe-green-inner" style="text-align: center;">
                  <p style="font-size:170%;">エンジニアとして得意なこと</p>
                </div>
                <!-- /stripe-green-inner -->
              </div>
              <!-- /stripe-green -->

              <p class="profile-text" style="font-size:140%; margin-top:5%;">
                Kotlinをつかったネイティブアプリの開発を得意としています。<br>
                Androidアプリ開発を最も長く経験していますが、同じくKotlinでFireTVのアプリを開発したこともあります。<br>
                <br>
                <span style="font-size:120%; font-weight: bold;">「新しい知識やスキルの吸収力」</span>も自身の強みであると自負しています。<br>
                <br>
                これまで使ったことのないライブラリを用いた開発や、新規アプリ開発においては仕様書や設計思想を汲み取った上で迅速に開発を進めていくことができます。<br>
                <br>
                また、現在は人員不足によりAPIやWebアプリケーションの改修作業も並行して行なっております。<br>
                <br>
                イチから開発できるまでには多少お時間をいただくことになると思いますが、他言語での開発についても、組織で求められているポジションで精力的に業務に従事することが可能です。
              </p>
              <!-- /profile-text -->
              <br>

              <div class="stripe-blue" style="margin: 0 10%; margin-top: 10%;">
                <div class="stripe-blue-inner" style="text-align: center;">
                  <p style="font-size:170%;">性格面</p>
                </div>
                <!-- /stripe-blue-inner -->
              </div>
              <!-- /stripe-blue -->

              <p class="profile-text" style="font-size:140%; margin-top:5%;">
                ・営業の経験を生かし、誰とでも円滑なコミュニケーションをとることができます。<br><br>
                ・好奇心旺盛で、思い立ったらすぐに行動します。<br><br>
                ・新しい技術やサービスに触れるのが好きです。<br><br>
                ・ユーザー目線で物事を考えることが得意で、エンジニアの立場から可能なサービス改善を心がけています。<br><br>
                ・負けず嫌いなところもあり、目標を成し遂げるために挑戦し続けます。<br><br>
              </p>

              <div class="stripe-orange" style="margin: 0 10%; margin-top: 10%;">
                <div class="stripe-blue-inner" style="text-align: center;">
                  <p style="font-size:170%;">キャリアビジョン</p>
                </div>
                <!-- /stripe-blue-inner -->
              </div>
              <!-- /stripe-blue -->

              <p class="profile-text" style="font-size:140%; margin-top:5%;">
                当面の間はエンジニアとしてのスキルを高めて行きたいと考えておりますが、いずれは市場分析を含むサービス提案や改善など、<br>マーケティングを織り交ぜながら仕事ができるエンジニアになりたいと考えております。<br>
                <br>
                <br>
                また、特定の業界への強いこだわりはありませんが、仕事をする上で以下のことを重視して参りたいと思っております。<br>
                <br>
                <br>
                <span style="font-size:120%; font-weight: bold;">・広く多くの人に使われるサービスであること</span><br>
                <span style="font-size:120%; font-weight: bold;">・正義感や使命感を持って取り組める仕事であること</span><br>
                <br>
                <br>
                これらは私自身が仕事をする上でのミッションとしても意識をしながら行動しております。<br>
              </p>

              <div class="stripe-red" style="margin: 0 10%; margin-top: 10%;">
                <div class="stripe-blue-inner" style="text-align: center;">
                  <p style="font-size:170%;">やってみたい開発</p>
                </div>
                <!-- /stripe-blue-inner -->
              </div>
              <!-- /stripe-blue -->

              <p class="profile-text" style="font-size:140%; margin-top:5%;">
                世の中のトレンドに則したサービスを作りたいです。<br><br>「新しい技術やサービスに触れることが好き」という自身の好奇心を開発にも生かしていきたいと考えています。<br><br>完全新規のプロジェクトや、触れたことのないライブラリを使った開発の際はとてもワクワクしながら取り組めています。<br>そのため、「新しいもの」かつ「世の中に必要とされているもの」を追い続けながら開発に関わりたいと思っております。

              </p>

              <!-- /profile-text -->

              <!-- <div id="prefParent" class="pref-parent"> -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -20vw; bottom: 0%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(1)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree1.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -10vw; bottom: 10%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(3)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree3.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 0vw; bottom: 8%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(5)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree5.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 10vw; bottom: 15%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(7)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree7.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 15vw; bottom: 12%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(9)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree9.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; right: -20vw; bottom: 8%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(2)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree2.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; right: -10vw; bottom: 5%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(4)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree4.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; right: 0vw; bottom: 0%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(6)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree6.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->
                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; right: 5vw; bottom: 14%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(8)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree8.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->

                <!-- <div class="pref-child" style="width: 40vw; height: 40vw; right: 10vw; bottom: 8%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(10)">
                      <img style="width: 100%;" src="https://rensa.s3-ap-southeast-1.amazonaws.com/images/portfolio/k.s/tree10.png">
                    </div>
                  </transition>
                </div> -->
                <!-- /pref-child -->

                <!-- <div class="pref-child absolute-center" style="width: 60%; margin-top: 3vw;"> -->
                  <!-- <transition name="fade"> -->
                    <!-- <div v-if="prefShowAnimNumber(11)"> -->
                      <!-- <div class="window-gray">
                        <p style="font-color: #666; font-size: 150%; width: 100%; text-align: center; font-color: #888;">出身地と行動範囲</p>
                        <div style="width: 100%;">
                          <div style="font-size:120%; font-color: #666; text-align: center;">福岡県北九州市の出身で、高校３年間は佐賀県<br>大学から東京に上京してきました。<br><br>思い立ったその日のうちに海外まで行ったことがあるくらいアクティブです。<br>必要とあればどこへでも行きます。</div>
                        </div>
                      </div> -->
                      <!-- /window-gray -->
                    <!-- </div> -->
                  <!-- </transition> -->
                <!-- </div>   -->
                <!-- /pref-child -->
              <!-- </div> -->
              <!-- /prefParent -->
              <!-- <br>
              <br> -->
              <!-- <div id="future"> -->
                <!-- <transition name="slide-down-fade">
                  <div v-if="showFuture"> -->
                    <!-- <p style="text-align: center;"><span style="font-size:200%; border-bottom: 2px solid #666; color: #666;">キャリアビジョン</span></p>

                    <p class="profile-text" style="font-size:140%; margin-top:5%;">
                      当面の間はエンジニアとしてのスキルを高めて行きたいと考えておりますが、いずれは市場分析を含むサービス提案や改善など、<br>マーケティングを織り交ぜながら仕事ができるエンジニアになりたいと考えております。<br> -->
                      <!-- <br>
                      ・エンジニアの教育<br>・生産性を向上させる環境作り<br>・ユーザー分析、最適化提案 -->
                      <!-- <br>
                      <br>
                      また、特定の業界への強いこだわりはありませんが、仕事をする上で以下のことを重視して参りたいと思っております。<br>
                      <br>
                      <br>
                      <span style="font-size:120%; font-weight: bold;">・広く多くの人に使われるサービスであること</span><br>
                      <span style="font-size:120%; font-weight: bold;">・正義感や使命感を持って取り組める仕事であること</span><br>
                      <br>
                      <br>
                      これらは私自身が仕事をする上でのミッションとしても意識をしながら行動しております。<br> -->
                    <!-- </p> -->
                  <!-- </div>
                </transition> -->
              <!-- </div> -->
              <!-- /future -->
              <!-- <br>
              <br> -->
              <!-- <div id="interest">
                <transition name="slide-down-fade">
                  <div v-if="showInterest">
                    <p style="text-align: center;"><span style="font-size:200%; border-bottom: 2px solid #666; color: #666;">業界への興味</span></p>

                    <p class="profile-text" style="margin-top:5%;">
                      特定の業界への強いこだわりはありません。
                      <br>
                      <br>
                      あえて書くとするならば、抽象的ではございますが人々に求められている物を作りたいと思います。<br>
                      こんな物を作ったんだぞと自分の子供に自慢できるようなビジネスに携わることが出来たならば、これ以上の喜びはございません。
                      <br>
                      <br>
                    </p>
                  </div>
                </transition>
              </div> -->
              <!-- /interest -->

              <div style="height: 30vh;"></div>
            </div>
          </section>

          <!--------------------->
          <!-- end tabContent1 -->
          <!--------------------->

          <!----------------------->
          <!-- start tabContent2 -->
          <!----------------------->

          <section :key="2" v-if="active(2)">
            <div class="history-background">
              <div class="tab-content" style="margin: 0 10px;">
                <div style="margin-left:10px; margin-right:20px;">
                  <br>
                  <!-- <h4 style="border-bottom: 1px solid #006e54;border-left: 10px solid #006e54;padding: 7px;">株式会社エーティ・プランニング</h4> -->
                  <div>
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 1人 <br>期間 : 2019 年 11 月 ~ 12月 <br>言語 : Java" , "title"=>"Web ECサイト構築" , "body"=>"Java,HTML,CSSを用いてグルメECサイトを作成 <br>企画部分から開発、テスト、リリースの全行程を担当したほか、管理用機能ページの作成もしました。" ]) ?>
                    <br>
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Android" , "info"=>"platform : Android<br>言語 : Kotlin <br>人数 : 1人<br>期間 : 2020 年 01 月 ~ 2020 年 02 月" , "title"=>"Androidアプリ開発" , "body"=>"自社 Android アプリ開発<br>アプリの新規開発から動作テスト、デバッグ対応、リリースまでの一連の流れを担当。<br>GooglePlayへの登録やFCM導入によるプッシュ通知の実装等も致しました。" ]) ?>
                    <br>
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Android" , "info"=>"platform : Android<br>言語 : Kotlin <br>人数 : 1人<br>期間 : 2020 年 01 月 ~ 2020 年 05 月" , "title"=>"Android サブスクリプション型アプリケーション新規開発業務" , "body"=>"新規月額課金型アプリの開発業務、既存アプリの改修対応業務<br>サブスクリプション登録の有無を判断し、メンバー価格および通常価格の価格変動処理を実装。これらの処理を含む課金動作確認を担当しました。<br>また、新規モジュールの作成とアニメーション処理の実装などのレイアウト作成も行いました。" ]) ?>
                  <!-- </div> -->
                  <!-- <h4 style="border-bottom: 1px solid #ff8c00;border-left: 10px solid #ff8c00;padding: 7px;">Web / スマートフォン アプリ開発企業</h4> -->
                  <!-- <div> -->
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Android" , "info"=>"platform : Android<br>言語 : Kotlin <br>人数 : 1人<br>期間 : 2020 年 02 月 ~ 2020 年 04 月" , "title"=>"AmazonFireTVアプリケーション新規開発業務" , "body"=>" 自社 FireTV アプリ開発<br>アプリの新規開発から動作テスト、デバッグ対応、リリースまでの一連の流れを担当。<br>AmazonDeveloperを用いたアプリ登録や課金テスト、FCM導入によるプッシュ通知の実装も致しました。<br>レイアウト作成においては、API連携による動的レイアウトを作成したほか、リモコン操作に準じたフォーカス移動を実装しました。" ]) ?>
                    <br>
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Android" , "info"=>"platform : Android<br>言語 : Kotlin <br>人数 : 3人<br>期間 : 2020 年 04 月 ~ 2020 年 05 月" , "title"=>"フルリモート 新規長期運用形 Android アプリケーションの開発業務" , "body"=>"月額サブスクリプション型 運用アプリの構築<br>フルリモート環境下での企画仕様書の読解および展開から、API準拠の動的レイアウト構築やアニメーション作成のほか、Realm DB構築等の開発業務を担当。<br>また、新人エンジニアへのタスク分配および進捗管理など、チームの指揮をとる形で連携を図り開発を進めました。" ]) ?>
                    <br>
                    <?= $this->element('Portfolio/accordion' , [ "head"=>"Web API" , "info"=>"platform : Web<br>人数 : 3人<br>Framework : Ruby on Rails<br>言語 : Ruby<br>期間 : 2020 年 05 月 ~ 現在" , "title"=>"Rails  API 運用、追加改修対応" , "body"=>"web / スマートフォンアプリ における多数のプラットフォームからアクセスする API の追加改修業務<br>API新規コンテンツ追加登録からテスト、公開を担当。<br>業務内ではymlファイルの追加やロジック作成、imagemagickを用いたShellScript作成も行なった。" ]) ?>
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"Storage" , "info"=>"platform : Windows<br>人数 : 1人<br>期間 : 2018 年 5 月 ~ 2018 年 6 月" , "title"=>"社内ファイルサーバ構築" , "body"=>"クラウド環境で構築していたファイルサーバの維持費用が肥大化しており、<br>社内環境でファイルサーバを構築、外部からは VPN で接続するよう環境を整備しました。<br><br>Windows 10 をベースに環境であることからセッション上限が 20 となっていたため、タスクスケジューラで使用していないセッションを定期的に削除する等の対応も行いました。" ]) ?> -->
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"SES" , "info"=>"期間 : 2017 年 4 月 ~ 現在" , "title"=>"SES 事業運用サポート" , "body"=>"外部向けスキルシートの作成、ポートフォリオ作成等対応<br>及び面談練習等も担当しておりました。<br>年間単位での想定コストと売り上げ目標の定義や退職率低下のための取り組みを行い、スタートアップから黒字好転までを達成。<br><br>継続した事業成長が出来るよう市場で求められる技術、分野のリサーチ、人員の組織化も担当し安定した運用体制を構築しました。" ]) ?> -->
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2019 年 4 月 ~ 2017 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android 長期運用形アプリの開発" , "body"=>"複数コンテンツの集約型アプリケーションの開発業務<br>レイアウト構築、API通信、DB管理等全開発を担当。<br><br>長期的に運用、改修を可能とするための構造設計、カスタムViewの作成等を意識して構築しておりました。<br>通信量が肥大化しないよう API 側の更新を検知する形で実装することで通信時間を削減、API側の負荷とユーザービリティを意識した開発を行いました。" ]) ?> -->
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2018 年 4 月 ~ 2018 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android サブスクリプション型アプリケーション開発" , "body"=>"月額定期購読型アプリケーションの開発業務<br>定期購読者向け特典機能の実装、割引購入処理等の実装をはじめとし、<br>各種レイアウト、設計、構築、テストを担当" ]) ?> -->
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : CakePHP<br>期間 : 2019 年 4 月 ~ 6月 運用継続<br>言語 : PHP" , "title"=>"CakePHP Web コンテンツの開発業務" , "body"=>"サーバ環境は AWS BeansTalk で構築。<br>CakePHP で複数決済システム向け環境を構築。<br>rakuten や biglobe といった決済システム毎の URL を作成し決済参照先を制御する等、将来的な決済システムの追加等にも耐えられる柔軟な構造を意識して開発しておりました。<br><br>これらの経験もあることから、決済システムの仕様書読解からリリースまで問題なく可能です。" ]) ?> -->
                    <!-- <br> -->
                    <!-- <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : WordPress<br>期間 : 2020 年 2 月 ~ 2020 年 4 月" , "title"=>"Owned Media 型 wordPress サイトの構築" , "body"=>"Docker で検証環境を構築し、AWS で実サイトを構築しました。<br>テンプレートの導入からプラグインの導入、wordPress 本体の php の編集も少量行いました。<br>wordPress 本体を変更すると将来的なリスクが大きいため、基本はプラグインを用いた形で構築。<br>また、CMS を用いた管理は非エンジニアが行う想定であったため、class 名設定によって自動で作用する animation や処理の作成も担当しました。" ]) ?> -->
                  </div>
                  <br>
                  <br>
                </div>
                <!-- /margin-left:10px; margin-right:20px; -->
              </div>
              <!-- /tab-content -->
            </div>
            <!-- /history-background -->
          </section>

          <!--------------------->
          <!-- end tabContent2 -->
          <!--------------------->

          <!----------------------->
          <!-- start tabContent3 -->
          <!----------------------->

          <section :key="3" v-if="active(3)">
            <div class="background">
              <div class="tab-content">
                <div class="skills">
                  <div>
                    <div style="background-color: purple; color: white; clip-path: polygon(0% 0%, 100% 0%, 75% 100%, 0% 100%);"><h6>PHP</h6></div>
                    <div class="skills-body"><h6>本ポートフォリオサイトは cakePHP / Vue.js で作成しています。<br>Webサイト制作やバックエンド用の json データ作成等問題なく可能です。<br><br>Element を活用したコード量の削減を大事にしております。<br><br>html / css / javascript / jQuery / Vue.js</h6></div>
                  </div>
                  <div>
                    <div class="skills-body"><h6>プロジェクトの作成、Developer アカウント開設、ストアの登録、個別課金、定期購読課金、リリースまで一通り可能です。<br><br>汎用的 Model クラスの作成や、カスタム View を活用した開発を特に得意とします。Objective-C の経験もあり、weak 弱参照によるメモリ保護やライフサイクル等も把握しています。<br><br> Objective-C / Swift / Realm ...etc</h6></div>
                    <div style="background-color: #1e90ff; color: white; clip-path: polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%);"><h6>Swift</h6></div>
                  </div>
                  <div>
                    <div style="background-color: green; color: white;"><h6>Kotlin</h6></div>
                    <div class="skills-body"><h6>プロジェクトの作成、Developer アカウント開設、ストアの登録、個別課金、定期購読課金、リリースまで一通り可能です。<br><br>FCM 実装やライフサイクル等は理解しておりますが、RxKotlin や AndroidArchitectureComponent 等の利用経験はございません。<br><br>Android Java での開発経験を有します。<br><br>Android Java / Kotlin / Realm / FCM ...etc</h6></div>
                  </div>
                  <div>
                    <div class="skills-body"><h6>実務ではツール作成程度しか経験がございませんが、趣味のゲーム作りで 5 年程開発を行っていました。メインメソッドの作成からクラス定義、シーン管理まで実装可能です。<br><br>ゲーム作りでは DXライブラリ を使用しており、2D / 3D どちらも開発経験があります。個別オブジェクトのステート管理や 3D カメラ運動計算、マップチップエディタ、最短経路探索等自作経験有り。<br><br> C++ / DXライブラリ</h6></div>
                    <div style="background-color: darkgoldenrod; color: black;"><h6>C++</h6></div>
                  </div>
                  <div>
                    <div style="background-color: red; color: white; clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"><h6>Ruby</h6></div>
                    <div class="skills-body"><h6>実務では Rails で構成された既存 API の保守運用、個人開発では Rails を導入した簡単な API 構築に使用した経験があります。json 形式での hash 加工等が可能です。<br><br>gem 管理等は経験がほとんどございませんが、framework の基本構造は cakePHP と近しいため、それらの知識を活かせるのではないかと思います。<br><br>Ruby / Ruby on Rails / html / css / javascript</h6></div>
                  </div>
                  <div>
                    <div class="skills-body"><h6>docker-compose の作成経験有り。<br>docker-compose 関連ファイルを共有して開発環境を共有できるよう構築した経験がございます。<br><br>php や mysql といった container で動作するサービスの config ファイルリンク、プロジェクトの documentRoot リンク等も可能です。<br><br>ネットワーク関連の知識も有することから様々なケースに対応出来ます。</h6></div>
                    <div style="background-color: #00008b; color: white; clip-path: inset(0 0 0 27%);"><h6>Docker</h6></div>
                  </div>
                  <div>
                    <div style="background-color: black; color: white; clip-path: polygon(14% 0, 100% 0, 100% 87%, 88% 100%, 0 100%, 23% 100%, 0 100%, 0 15%);"><h6>Network</h6></div>
                    <div class="skills-body"><h6>global network、private network、IPv4、IPv6、Router、サブネットマスクといった、基本的なネットワーク知識を有します。<br><br>計 25 台で構成された本番環境準拠の仮想マシン環境を Hyper-V で構築した経験もあるため、サーバやネットワークに関するチューニング、設計、問題解決も可能です。</h6></div>
                  </div>
                  <div>
                    <div class="skills-body"><h6>本サイトは AWS における以下のサービスを用いて構築しております。<br><br>EC2 / ELB / RDS / CertificateManager / Route53 / IAM / S3<br><br>デプロイは CodeDeploy / CircleCI / Github を連携させ実現。<br><br>calculation ツールを用いた想定コスト計算やバックアップ設定等も経験がございます。<br><br>これまでのネットワーク構築経験やサーバ本体に関する知識から、新規サーバ構築等問題なく可能です。</h6></div>
                    <div style="background-color: #cd853f; color: white; clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);"><h6>AWS</h6></div>
                  </div>
                </div>
                <!-- /skills -->
              </div>
              <!-- /tab-content -->
            </div>
            <!-- /background -->
          </section>

          <!--------------------->
          <!-- end tabContent3 -->
          <!--------------------->

          <!----------------------->
          <!-- start tabContent4 -->
          <!----------------------->

          <section :key="4" v-if="active(4)">
            <div class="background">
              <div class="tab-content">
                <div id="tab4Content" class="position-fixed" style="width: 100%; height: 100%;">
                  <div class="relative-full-window">


                    <!---------------------------------------
                        page1
                    ---------------------------------------->
                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(0,1)" style="width: 100%; top: 50%; bottom: 50%; color: #888;">
                          <h1 style="text-align: center;">Please scroll</h1>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(2,6)" style="left: 0; bottom:0; width: 100%; height: 5vw; background-color: black;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-left-rotate-fade">
                        <div v-if="tab4ShowAnimPeriod(1,6)" style="left: 0; bottom: 0; width: 10vw; height: 10vw; background-color: blue;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(3,6)" style="width: 100%; top: 30%; bottom: 70%; color: #888;">
                          <h1 style="text-align: center; font-size: 200%;">【趣味、資格・実績】</h1>
                          <!-- <h2 style="text-align: center; font-size: 150%;">◆やってみたい開発</h2> -->
                          <h2 style="text-align: center; font-size: 150%;">◆趣味</h2>
                          <h2 style="text-align: center; font-size: 150%;">◆資格・実績</h2>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <!---------------------------------------
                        page2
                    ---------------------------------------->

                    <!-- <div>
                      <transition name="slide-up-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 3vw; height: 100%; left: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->
                    <!-- <div>
                      <transition name="slide-down-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 3vw; height: 100%; right: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->
                    <!-- <div>
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 3vw; top: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->
                    <!-- <div>
                      <transition name="slide-right-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 3vw; bottom: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->

                    <!-- <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 100%;">
                          <div style="top: 0; left: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="top: 0; right: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="bottom: 0; left: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="bottom: 0; right: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->
                    
                    <!-- <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; top: 30%; bottom: 70%; color: #888;">
                          <h1 style="text-align: center; font-size: 200%;">やってみたい開発</h1>
                          <div style="width: 80vw; margin: 0 10vw;">
                            <div class="window-gray" style="font-size: 120%; width: 70vw; height: auto;">
                              世の中のトレンドに則したサービスを作りたいです。<br><br>「新しい技術やサービスに触れることが好き」という自身の好奇心を開発にも生かしていきたいと考えています。<br><br>完全新規のプロジェクトや、触れたことのないライブラリを使った開発の際はとてもワクワクしながら取り組めています。そのため、「新しいもの」かつ「世の中に必要とされているもの」を追い続けながら開発に関わりたいと思っております。
                            </div>
                          </div>
                        </div>
                      </transition>
                    </div> -->
                    <!-- /div -->

                    <!---------------------------------------
                        page3
                    ---------------------------------------->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 100%; background-color: #d2b48c;"></div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(9,16)" style="width: 100%; height: 100%; background-color: #8b4513; clip-path: polygon(100% 0, 0 0, 0 100%);"></div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="slide-flat-rotate-fade">
                        <div v-if="tab4ShowAnimPeriod(10,16)" style="left:25vw; top:3vh">
                          <p style="text-align: left;">
                            <span style="font-size:200%; border-bottom: 2px solid white; color: white;">
                              趣味
                            </span>
                          </p>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(12,16)" style="left:30vw; top: 30vh;">
                          <div style="font-size: 120%; width: 60vw; height: auto; color: white; background-color: #6668; border-radius: 10px; padding: 10px;">
                            ◆読書<br><br>
                            ビジネス書や心理学、哲学書を中心にマンガもよく読みます。毎週土日は本屋に行って２冊以上本を読むようにしています。<br>
                            <br><br>
                            ◆動画編集<br><br>
                            平日の夜は、Adobeソフトを使って動画編集とアニメーション作成をしています。まだまだ始めたばかりですが、Youtube動画編集や結婚式ムービー作成などの依頼を受注しています。<br>
                            ◆サッカー<br><br>
                            小学校・高校ではサッカー部に所属していました。最近プレイはできていませんが、海外リーグや代表戦を観戦するのも好きです。<br>
                            <br><br>
                            ◆旅行<br><br>
                            大学時代にはバックパッカーをしていたほど旅行が好きです。社会人になってから海外旅行には行けていませんが、いつかタイのソンクランに参加したいと思っています。
                          </div>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <!---------------------------------------
                        page4
                    ---------------------------------------->

                    <div style="pointer-events: none;">
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(17,22)" style="width: 100%; height: 100%; background-color: #808000;"></div>
                      </transition>
                    </div> 
                    <!-- /div -->

                    <div style="pointer-events: none;">
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(19,22)" style="top: 20vh;">
                          <p style="text-align: center;">
                            <span style="font-size:200%; border-bottom: 2px solid white; color: white;">
                              資格・実績
                            </span>
                          </p>
                          <p style="text-align: center;">
                            <span style="font-size:120%; color: white; margin: 20px;">
                              <br>
                              ・普通自動車免許<br><br>
                              ・ライフコンサルタント<br><br>
                              ・第６回観光論文コンテスト<br><br>
                              ・観光庁長官賞受賞（最優秀賞）<br><br>
                              ・L’oreal Brandstorm 世界大会出場<br><br>
                              ・早稲田大学文化賞<br>
                            </span>
                          </p>
                        </div>
                      </transition>
                    </div>

                    <!---------------------------------------
                        page5
                    ---------------------------------------->
                    <div style="pointer-events: none;">
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(23,100)" style="width: 100%; height: 100%; background-color: #000000;"></div>
                      </transition>
                    </div> 

                    <div style="pointer-events: none;">
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(23,100)" style="top: 20vh;">
                          <p style="text-align: center;">
                            <span style="font-size:200%; border-bottom: 2px solid white; color: white;">
                              最後に
                            </span>
                          </p>
                          <p style="text-align: center;">
                            <span style="font-size:120%; color: white; margin: 20px;">
                              <br>
                              人生においては、仕事にかける時間がその大半を占めています。<br>
                              だからこそ、仕事は楽しいものでなければならないと感じると同時に、仕事を通じて多くの人に影響を与えたいと思っています。<br>
                              この想いを原動力に、自分のできるところから少しずつ、自らに課したミッションを果たして行こうと思います。
                              <br>
                              <br>
                              本ポートフォリオは以上となります。<br>
                              ここまでご覧いただき誠にありがとうございました。<br>
                              <br>
                              ご興味を持っていただけましたら幸いです。<br>
                              何卒よろしくお願いいたします。<br>
                              <br>
                              ~ Kohei Yamamoto ~
                            </span>
                          </p>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                  </div>
                  <!-- /relative-full-window -->
                </div>
                <!-- /position-fixed -->
                
                <div style="height: 1200vh;"></div> <!-- scroll size -->

              </div>
              <!-- /tab-content -->
            </div>
            <!-- /background -->
          </section>
          <!--------------------->
          <!-- end tabContent4 -->
          <!--------------------->
      </transition>
    </div>
    <!-- /contentVue -->
  </div>
  <!-- /mainTabs -->
</div>
<!-- /main-section -->

<script src="/js/portfolio.js"></script>


