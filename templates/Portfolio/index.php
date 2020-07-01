<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-slide-up-down@1.0.2/dist/vue-slide-up-down.umd.js"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

<?= $this->Html->css('/css/Portfolio/portfolio.css') ?>
<?= $this->Html->css('/css/Portfolio/components.css') ?>
<?= $this->Html->css('/lib/icomoon/icomoon.css') ?>

<script src="/js/Portfolio/components.js"></script>
<script src="/js/Portfolio/smooth-scroll.js"></script>

<!-- <div class="background"> -->
  <div class="main-section">
    <div id="mainTabs">
        <ul class="tab">
            <li @click="changeTab(1)" @keyup.enter="changeTab(1)" :class="{active:active(1)}" tabindex="0">自己紹介</li>
            <li @click="changeTab(2)" @keyup.enter="changeTab(2)" :class="{active:active(2)}" tabindex="1">経歴</li>
            <li @click="changeTab(3)" @keyup.enter="changeTab(3)" :class="{active:active(3)}" tabindex="2">スキルセット</li>
        </ul>
        <div id="contentVue" class="content-vue">
            <transition>
                <section :key="1" v-if="active(1)">
                  <div class="tab-content">
                    <div class="profile-top">
                      <div class="first">
                        <p>
                          開発をもっと楽しく、もっと先に。
                        </p>
                      </div>
                      <div class="second">
                        <p>
                          Keita.Sugiyama's Portfolio
                        </p>
                      </div>
                      <div class="third">
                        <p>
                          閲覧いただきありがとうございます。<br>
                          本ページは「Keita.Sugiyama」のポートフォリオページとなります。<br><br>
                          経歴や保有スキル、基本理念から <span style="color:red">どんな人間なのか</span> をご紹介できたら幸いです。
                        </p>
                      </div>
                    </div>
                    <div class="stripe-green" style="margin: 0 10%;">
                      <div class="stripe-green-inner" style="text-align: center;">
                        <p style="font-size:170%;">エンジニアとして得意なこと</p>
                      </div>
                    </div>
                    <p class="profile-text" style="margin-top:5%;">
                      Web / Native どちらも経験を積んだ雑食系エンジニアです。<br>
                      特に得意なのは cakePHP での web 開発と Swift / Kotlin でのアプリ開発 となります。<br>
                      <br>
                      <span style="font-weight: bold;">サービス指向エンジニア</span>であることを常に意識しており、プロジェクトの推進に必要とあれば自身の担当領域外であってもサポートすることを大切にしています。<br>
                      <br>
                      ベンチャー企業の開発部門長の経験から、限られたリソース内での運用、改善、影響範囲の最小化等を意識して行動できます。<br>
                      顧客への説明等も経験があるため非エンジニアへの説明も問題なく可能です。<br>
                      <br>
                      エンジニアとしてサービスの品質の担保は当然であるため、良い品質での商品を生み出すための現実的なスケジュールを策定し行動します。
                      <br>
                      <br>
                      未経験の言語でのアプリ開発を 1 ~ 2 ヶ月程度の短い期間で完了させた実績もあり、知識吸収の柔軟性、状況への対応力は高いほうかと思います。
                    </p>
                    <br>

                    <div class="stripe-blue" style="margin: 0 10%; margin-top: 2%;">
                      <div class="stripe-blue-inner" style="text-align: center;">
                        <p style="font-size:170%;">性格面</p>
                      </div>
                    </div>
                    <p class="profile-text" style="margin-top:5%;">
                      ・発言はなるべくオブラートに包みます。<br>
                      ・改善をするのが好きで、少しずつでも現状からの改善を試みます。<br>
                      ・良く言えばフルスタックに作業できる反面、器用貧乏な一面も。<br>
                      ・コミュニケーションは気楽にできるタイプです。<br>
                      ・新しい発見や技術を見つけるとすぐ共有したくなります。<br>
                      ・飲み会とかはちょっと苦手。
                    </p>


                    <div id="prefParent" class="pref-parent">
                      <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -20vw; bottom: 0%;">
                        <transition name="slide-right-fade">
                          <div v-if="prefShowAnimNumber(1)">
                            <img style="width: 100%;" src="/img/portfolio/tree1.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -10vw; bottom: 10%;">
                        <transition name="slide-right-fade">
                          <div v-if="prefShowAnimNumber(3)">
                            <img style="width: 100%;" src="/img/portfolio/tree3.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 0vw; bottom: 8%;">
                        <transition name="slide-right-fade">
                          <div v-if="prefShowAnimNumber(5)">
                            <img style="width: 100%;" src="/img/portfolio/tree5.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 10vw; bottom: 15%;">
                        <transition name="slide-right-fade">
                          <div v-if="prefShowAnimNumber(7)">
                            <img style="width: 100%;" src="/img/portfolio/tree7.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 15vw; bottom: 12%;">
                        <transition name="slide-right-fade">
                          <div v-if="prefShowAnimNumber(9)">
                            <img style="width: 100%;" src="/img/portfolio/tree9.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; right: -20vw; bottom: 8%;">
                        <transition name="slide-left-fade">
                          <div v-if="prefShowAnimNumber(2)">
                            <img style="width: 100%;" src="/img/portfolio/tree2.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; right: -10vw; bottom: 5%;">
                        <transition name="slide-left-fade">
                          <div v-if="prefShowAnimNumber(4)">
                            <img style="width: 100%;" src="/img/portfolio/tree4.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; right: 0vw; bottom: 0%;">
                        <transition name="slide-left-fade">
                          <div v-if="prefShowAnimNumber(6)">
                            <img style="width: 100%;" src="/img/portfolio/tree6.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; right: 5vw; bottom: 14%;">
                        <transition name="slide-left-fade">
                          <div v-if="prefShowAnimNumber(8)">
                            <img style="width: 100%;" src="/img/portfolio/tree8.png">
                          </div>
                        </transition>
                      </div>
                      <div class="pref-child" style="width: 40vw; height: 40vw; right: 10vw; bottom: 8%;">
                        <transition name="slide-left-fade">
                          <div v-if="prefShowAnimNumber(10)">
                            <img style="width: 100%;" src="/img/portfolio/tree10.png">
                          </div>
                        </transition>
                      </div>

                      <div class="pref-child absolute-center" style="width: 60%; margin-top: 10vw;">
                        <transition name="fade">
                          <div v-if="prefShowAnimNumber(11)">
                            <div class="window-gray">
                              <p style="font-color: #666; font-size: 150%; width: 100%; text-align: center; font-color: #888;">出身地と行動範囲</p>
                              <div style="width: 100%;">
                                <div style="font-color: #666; text-align: center;">埼玉県秩父方面の田舎生まれ<br>現在は東京在住<br><br>丸の内線荻窪駅から 1 時間以内を目安に行動しています。</div>
                              </div>
                            </div>
                          </div>
                        </transition>
                      </div>                      
                    </div>
                    <br>
                    <br>
                    <div id="future">
                      <transition name="slide-down-fade">
                        <div v-if="showFuture">
                          <p style="text-align: center;"><span style="font-size:200%; border-bottom: 2px solid #666; color: #666;">将来のこと</span></p>

                          <p class="profile-text" style="margin-top:5%;">
                            <span style="font-weight: bold;">自分でコードを書くエンジニアでいたい</span>と思いますが、以下のようなマネジメント領域も出来たらと思っています。<br>
                            <br>
                            ・エンジニアの教育<br>・生産性を向上させる環境作り<br>・ユーザー分析、最適化提案
                            <br>
                            <br>
                            技術の俗人化はさせず、お客様にはより良い物を安定して提供していけたら幸いです。
                          </p>
                        </div>
                      </transition>
                    </div>
                    <br>
                    <br>
                    <div id="interest">
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
                    </div>
                    <div style="height: 30vh;"></div>
                  </div>
                </section>
                <section :key="2" v-if="active(2)">
                  <div class="history-background">
                    <div class="tab-content" style="margin: 0 10px;">
                      <div style="margin: 10px;">
                        <br>
                        <h4 style="border-bottom: 1px solid #006e54;border-left: 10px solid #006e54;padding: 7px;">株式会社エーティ・プランニング</h4>
                        <div>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows ActiveDirectory" , "info"=>"言語 : C++ , ShellScript<br>環境 : Windows Server Active Directory<br>人数 : 2人<br>期間 : 2013 年 5 月 ~ 2013 年 11 月" , "title"=>"省庁系ローカルネットワーク環境における<br>Active Directory テスト環境構築、及び実運用を想定した変更対応手順等の確立案件" , "body"=>"Windows Server 2008 R2 環境での Active Directory サーバの構築を担当しました。<br>グループポリシーの適用検証や組織改変対応、ldifde コマンドを用いた Active Directory 上のユーザ、グループ変更がメイン業務でした。<br><br>定期的に発生する大規模組織改変等に安全性、時間効率に問題を感じ csv データを基とした ldf ファイルの自動生成スクリプトを作成しました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows SharePoint" , "info"=>"言語 : なし<br>環境 : Windows Server SharePoint<br>人数 : 2人<br>期間 : 2013 年 12 月 ~ 2014 年 2 月" , "title"=>"省庁系 ローカルネットワーク構築案件への入札提案資料作成" , "body"=>"使用技術の調査、要求サーバスペックを前提としたサーバ費用見積もり<br>ライセンス費用等をもとにした合計費用の見積もりや構築期間を提案資料としてまとめ、入札へ臨みました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows SharePoint" , "info"=>"platform : Windows Server 2012 、 SharePoint 、 Exchange 、 Lync 、 Linux<br>人数 : 3人<br>期間 : 2014 年 3 月 ~ 2016 年 5 月<br>言語 : C++ 、 ShellScript<br>サーバ規模 : Webフロントエンド 6 台、 アプリケーションサーバ 2 台、インデックスサーバ 4 台、 データベースサーバ 4 台" , "title"=>"省庁系、SharePoint グループウェアサーバの構築" , "body"=>"Windows Server 2012 環境での SharePoint 2013 サーバの構築を担当しました。<br>顧客との機能面の打ち合わせやレイアウトの取り決めからスタートし、構築フェーズでは基本レイアウトやページテンプレートの作成、Exchange Lync といった他サーバとの繋ぎ込みを含む全工程を担当しました。<br><br>大規模な組織改変が定期的に行われることが前提としてあったため、csv データを基とした一括変更適用の ShellScript の改修も実施しました。<br><br>本番環境に似せたプライベートネットワーク環境を Hyper-V を用いて開発した実績もございます。<br>計 25 台の仮想マシンを構築し運用手順も含め開発、納品しました。<br><br>仮想マシンであるため普段は起動しないで運用する時間もあったため、安全な起動停止を実現する Windows ShellScript の開発も担当しました。" ]) ?>
                        </div>
                        <h4 style="border-bottom: 1px solid #ff8c00;border-left: 10px solid #ff8c00;padding: 7px;">株式会社レンサ</h4>
                        <div>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Management" , "info"=>"platform : iOS / Android / Ruby / PHP<br>人数 : 10人前後<br>期間 : 2017 年 5 月 ~ 継続<br>言語 : 社内開発環境全て" , "title"=>"社内開発部門 マネジメント" , "body"=>"社内開発部門の部門長としてプロジェクト管理、他部門との連携、スケジュール調整、進捗管理といったマネジメント全般を担当。<br>進捗の芳しく無いプロジェクトのサポートや仕様変更に伴うスケジュール再見積もり等も行い、同時並行で動く複数プロジェクトを管理しておりました。<br><br>開発に使用するハードウェア選定、サーバスペックの見積もり、社内 SE 的な対応、エンジニア / 非エンジニア を問わず技術的な質問窓口としても行動しておりました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2016 年 6 月 ~ 後述の言語移行後、現在も継続<br>言語 : Objective-C / Android Java" , "title"=>"BtoC iOS / Android アプリケーション開発" , "body"=>"Objective-C / Android Java を用いたスマートフォン両プラットフォーム向けのアプリケーション開発を担当。<br>API の取得や課金実装、GCM Push 通知に関する設定や各種レイアウト作成を担当しました。<br>新規プロジェクトの作成からリリースまで一貫して担当しており、ストアに関する操作や新アカウントの開設等も問題なく可能です。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2016 年 12 月 ~ 2017 年 2 月<br>言語 : Objective-C / Swift / Android Java / Kotlin" , "title"=>"iOS / Android アプリケーション 開発言語移行" , "body"=>"Objective-C / Android Java で作成されていたプロジェクトを Swift / Kotlin 言語で作り直しました。<br>過去のプロジェクトでは長期運用を想定したコード実装がなされておらず、また、同一処理のカスタムView化等も行われておらず、<br>既存のアプリ仕様を守った形で完全に作り直した形となります。<br><br>基礎構文や基本機能はもちろんのこと、API通信、非同期処理、noSQL等も全て実装しました。<br>移行後のプロジェクトの追加開発、運用は継続して実施しております。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web API" , "info"=>"platform : Web<br>人数 : 1人<br>Framework : Ruby on Rails<br>期間 : 2017 年 3 月 ~ 2018 年 3 月<br>言語 : Ruby" , "title"=>"Rails API 改修業務" , "body"=>"自社、他社からアクセスの発生する API 機能の改修業務。<br>新規コンテンツ用定義ファイルの追加、各種ロジックの作成や json 出力処理等を開発しておりました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Storage" , "info"=>"platform : Windows<br>人数 : 1人<br>期間 : 2018 年 5 月 ~ 2018 年 6 月" , "title"=>"社内ファイルサーバ構築" , "body"=>"クラウド環境で構築していたファイルサーバの維持費用が肥大化しており、<br>社内環境でファイルサーバを構築、外部からは VPN で接続するよう環境を整備しました。<br><br>Windows 10 をベースに環境であることからセッション上限が 20 となっていたため、タスクスケジューラで使用していないセッションを定期的に削除する等の対応も行いました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"SES" , "info"=>"期間 : 2017 年 4 月 ~ 現在" , "title"=>"SES 事業運用サポート" , "body"=>"外部向けスキルシートの作成、ポートフォリオ作成等対応<br>及び面談練習等も担当しておりました。<br>年間単位での想定コストと売り上げ目標の定義や退職率低下のための取り組みを行い、スタートアップから黒字好転までを達成。<br><br>継続した事業成長が出来るよう市場で求められる技術、分野のリサーチ、人員の組織化も担当し安定した運用体制を構築しました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2019 年 4 月 ~ 2017 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android 長期運用形アプリの開発" , "body"=>"複数コンテンツの集約型アプリケーションの開発業務<br>レイアウト構築、API通信、DB管理等全開発を担当。<br><br>長期的に運用、改修を可能とするための構造設計、カスタムViewの作成等を意識して構築しておりました。<br>通信量が肥大化しないよう API 側の更新を検知する形で実装することで通信時間を削減、API側の負荷とユーザービリティを意識した開発を行いました。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2018 年 4 月 ~ 2018 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android サブスクリプション型アプリケーション開発" , "body"=>"月額定期購読型アプリケーションの開発業務<br>定期購読者向け特典機能の実装、割引購入処理等の実装をはじめとし、<br>各種レイアウト、設計、構築、テストを担当" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : CakePHP<br>期間 : 2019 年 4 月 ~ 6月 運用継続<br>言語 : PHP" , "title"=>"CakePHP Web コンテンツの開発業務" , "body"=>"サーバ環境は AWS BeansTalk で構築。<br>CakePHP で複数決済システム向け環境を構築。<br>rakuten や biglobe といった決済システム毎の URL を作成し決済参照先を制御する等、将来的な決済システムの追加等にも耐えられる柔軟な構造を意識して開発しておりました。<br><br>これらの経験もあることから、決済システムの仕様書読解からリリースまで問題なく可能です。" ]) ?>
                          <br>
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : WordPress<br>期間 : 2020 年 2 月 ~ 2020 年 4 月" , "title"=>"Owned Media 型 wordPress サイトの構築" , "body"=>"Docker で検証環境を構築し、AWS で実サイトを構築しました。<br>テンプレートの導入からプラグインの導入、wordPress 本体の php の編集も少量行いました。<br>wordPress 本体を変更すると将来的なリスクが大きいため、基本はプラグインを用いた形で構築。<br>また、CMS を用いた管理は非エンジニアが行う想定であったため、class 名設定によって自動で作用する animation や処理の作成も担当しました。" ]) ?>
                        </div>
                        <br>
                        <br>
                      </div>
                    </div>
                  </div>
                </section>
                <section :key="3" v-if="active(3)">
                  <div class="background">
                    <div class="tab-content">
                      <div class="skills">
                        <div>
                          <div class="title" style="background-color: purple; color: white; clip-path: polygon(0% 0%, 100% 0%, 75% 100%, 0% 100%);"><h6>PHP</h6></div>
                          <div class="body"><h6>本ポートフォリオサイトは cakePHP / Vue.js で作成しています。<br>Webサイト制作やバックエンド用の json データ作成等問題なく可能です。<br><br>Element を活用したコード量の削減を大事にしております。<br><br>html / css / javascript / jQuery / Vue.js</h6></div>
                        </div>
                        <div>
                          <div class="body"><h6>プロジェクトの作成、Developer アカウント開設、ストアの登録、個別課金、定期購読課金、リリースまで一通り可能です。<br><br>汎用的 Model クラスの作成や、カスタム View を活用した開発を特に得意とします。Objective-C の経験もあり、weak 弱参照によるメモリ保護やライフサイクル等も把握しています。<br><br> Objective-C / Swift / Realm ...etc</h6></div>
                          <div class="title" style="background-color: #1e90ff; color: white; clip-path: polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%);"><h6>Swift</h6></div>
                        </div>
                        <div>
                          <div class="title" style="background-color: green; color: white;"><h6>Kotlin</h6></div>
                          <div class="body"><h6>プロジェクトの作成、Developer アカウント開設、ストアの登録、個別課金、定期購読課金、リリースまで一通り可能です。<br><br>FCM 実装やライフサイクル等は理解しておりますが、RxKotlin や AndroidArchitectureComponent 等の利用経験はございません。<br><br>Android Java での開発経験を有します。<br><br>Android Java / Kotlin / Realm / FCM ...etc</h6></div>
                        </div>
                        <div>
                          <div class="body"><h6>実務ではツール作成程度しか経験がございませんが、趣味のゲーム作りで 5 年程開発を行っていました。メインメソッドの作成からクラス定義、シーン管理まで実装可能です。<br><br>ゲーム作りでは DXライブラリ を使用しており、2D / 3D どちらも開発経験があります。個別オブジェクトのステート管理や 3D カメラ運動計算、マップチップエディタ、最短経路探索等自作経験有り。<br><br> C++ / DXライブラリ</h6></div>
                          <div class="title" style="background-color: darkgoldenrod; color: black;"><h6>C++</h6></div>
                        </div>
                        <div>
                          <div class="title" style="background-color: red; color: white; clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"><h6>Ruby</h6></div>
                          <div class="body"><h6>実務では Rails で構成された既存 API の保守運用、個人開発では Rails を導入した簡単な API 構築に使用した経験があります。json 形式での hash 加工等が可能です。<br><br>gem 管理等は経験がほとんどございませんが、基本構造は cakePHP と近しいため、それらの知識を活かせるのではないかと思います。<br><br>Ruby / Ruby on Rails / html / css / javascript</h6></div>
                        </div>
                        <div>
                          <div class="body"><h6>Docker にて wordpress ローカル環境を構築した経験があります。Docker Compose 作成に関しては経験が浅く、Web 上に公開されているものを参考に docker-compose up をしたことがある程度です。<br><br>使用経験 image : wordpress:latest , mysql:5.7</h6></div>
                          <div class="title" style="background-color: #00008b; color: white; clip-path: inset(0 0 0 27%);"><h6>Docker</h6></div>
                        </div>
                        <div>
                          <div class="title" style="background-color: black; color: white; clip-path: polygon(0 0, 0 0, 100% 35%, 100% 100%, 0 100%, 0 100%, 0% 80%, 0% 20%);"><h6>Network</h6></div>
                          <div class="body"><h6>global network、private network、IPv4、IPv6、Router、サブネットマスクといった、基本的なネットワーク知識を有します。<br><br>計 25 台で構成された本番環境準拠の仮想マシン環境を Hyper-V で構築した経験もあるため、サーバやネットワークに関するチューニング、設定も可能です。</h6></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </transition>
        </div>
    </div>
  </div>
<!-- </div> -->

<script src="/js/Portfolio/portfolio.js"></script>
<script>
</script>


