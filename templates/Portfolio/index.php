
<?= $this->Html->css('/css/portfolio.css') ?>
<?= $this->Html->css('/css/portfolio.animations.css') ?>
<?= $this->Html->css('/css/components.css') ?>

<script src="/js/vue.js"></script>
<script src="/js/vue-slide-up-down.umd.js"></script>
<script src="/js/components.js"></script>

<div class="main-section">
  <div id="mainTabs">
    <ul class="tab">
        <li @click="changeTab(1)" @keyup.enter="changeTab(1)" :class="{active:active(1)}" tabindex="0">自己紹介</li>
        <li @click="changeTab(2)" @keyup.enter="changeTab(2)" :class="{active:active(2)}" tabindex="1">経歴</li>
        <li @click="changeTab(3)" @keyup.enter="changeTab(3)" :class="{active:active(3)}" tabindex="2">スキルセット</li>
        <li @click="changeTab(4)" @keyup.enter="changeTab(4)" :class="{active:active(4)}" tabindex="3">趣味等</li>
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
                    開発でもっと楽しく、もっと快適な生活を。
                  </p>
                </div>
                <!-- first -->
                <div class="second">
                  <p>Keita.Sugiyama's Portfolio</p>
                </div>
                <!-- /second -->
                <div class="third">
                  <p>
                    閲覧いただきありがとうございます。<br>
                    本ページは「 Keita.Sugiyama 」のポートフォリオページとなります。<br>
                    経歴や保有スキルから <span style="color:red">どんな人間なのか</span> をご紹介できたら幸いです。
                  </p>
                </div>
                <!-- /third -->
              </div>
              <!-- /profile-top -->

              <div class="stripe-green" style="margin: 0 10%;">
                <div class="stripe-green-inner" style="text-align: center;">
                  <p style="font-size:170%;">エンジニアとして得意なこと</p>
                </div>
                <!-- /stripe-green-inner -->
              </div>
              <!-- /stripe-green -->

              <p class="profile-text" style="margin-top:5%;">
                Web / Native どちらも経験を積んだ雑食系エンジニアです。<br>
                以下の言語が特に慣れ親しんだものになります。<br><br>
                ・PHP (cakePHP) <br>
                ・ShellScript<br>
                ・Swift<br>
                ・Kotlin (Android)<br>
                ・C++<br>
                <br>
                Web / Native どちらもプロジェクト作成からリリースまで経験し、開発と並行した課金等の情報収集も可能です。
                <br>
                過去のゲーム個人開発から複雑なフラグ管理や座標操作といった経験が活きていると感じます。
                <br>
                <br>
                サーバ方面ですと大規模オンプレミス環境構築、仮想マシン構築、docker の経験を活用可能です。
                <br>
                環境構築の際に習得したネットワーク関連知識もございます。
                <br>
                <br>
                最近はベンチャー企業の開発部門長の経験から「限られたリソース内での運用」「影響範囲の最小化」といった状況に応じた対応を意識しています。
                <br>
                最良の開発と共に<span style="font-weight: bold;">サービス指向エンジニア</span>であることを心掛け、プロダクトの安定提供や品質の向上を意識して取り組めたらと思います。
                <br>
                <br>
                顧客満足度向上と作業負荷のバランス調整は難しいものではございますが、両者満足のいく体験が出来れば幸いです。
                <br>
              </p>
              <!-- /profile-text -->
              <br>

              <div class="stripe-blue" style="margin: 0 10%; margin-top: 2%;">
                <div class="stripe-blue-inner" style="text-align: center;">
                  <p style="font-size:170%;">性格面</p>
                </div>
                <!-- /stripe-blue-inner -->
              </div>
              <!-- /stripe-blue -->

              <p class="profile-text" style="margin-top:5%;">
                ・発言はなるべくオブラートに包みます。<br>
                ・気になるところがあれば、少しずつでも現状からの改善を試みます。<br>
                ・良く言えば様々な領域を理解できる反面、器用貧乏な一面も。<br>
                ・コミュニケーションは気楽にできるタイプです。<br>
                ・新しい技術は見つけるとすぐ共有したくなります。<br>
                ・飲み会とかはちょっと苦手。
              </p>
              <!-- /profile-text -->

              <div id="prefParent" class="pref-parent">
                <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -20vw; bottom: 0%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(1)">
                      <img style="width: 100%;" src="/img/portfolio/tree1.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: -10vw; bottom: 10%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(3)">
                      <img style="width: 100%;" src="/img/portfolio/tree3.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 0vw; bottom: 8%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(5)">
                      <img style="width: 100%;" src="/img/portfolio/tree5.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 10vw; bottom: 15%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(7)">
                      <img style="width: 100%;" src="/img/portfolio/tree7.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; margin-left: 15vw; bottom: 12%;">
                  <transition name="slide-right-fade">
                    <div v-if="prefShowAnimNumber(9)">
                      <img style="width: 100%;" src="/img/portfolio/tree9.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; right: -20vw; bottom: 8%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(2)">
                      <img style="width: 100%;" src="/img/portfolio/tree2.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; right: -10vw; bottom: 5%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(4)">
                      <img style="width: 100%;" src="/img/portfolio/tree4.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; right: 0vw; bottom: 0%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(6)">
                      <img style="width: 100%;" src="/img/portfolio/tree6.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->
                <div class="pref-child" style="width: 40vw; height: 40vw; right: 5vw; bottom: 14%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(8)">
                      <img style="width: 100%;" src="/img/portfolio/tree8.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->

                <div class="pref-child" style="width: 40vw; height: 40vw; right: 10vw; bottom: 8%;">
                  <transition name="slide-left-fade">
                    <div v-if="prefShowAnimNumber(10)">
                      <img style="width: 100%;" src="/img/portfolio/tree10.png">
                    </div>
                  </transition>
                </div>
                <!-- /pref-child -->

                <div class="pref-child absolute-center" style="width: 60%; margin-top: 10vw;">
                  <transition name="fade">
                    <div v-if="prefShowAnimNumber(11)">
                      <div class="window-gray">
                        <p style="font-color: #666; font-size: 150%; width: 100%; text-align: center; font-color: #888;">出身地と活動範囲</p>
                        <div style="width: 100%;">
                          <div style="font-color: #666; text-align: center;">埼玉県秩父方面の田舎育ち<br>現在は東京在住<br><br>丸の内線荻窪駅から 1 時間以内を目安に活動しています。</div>
                        </div>
                      </div>
                      <!-- /window-gray -->
                    </div>
                  </transition>
                </div>  
                <!-- /pref-child -->
              </div>
              <!-- /prefParent -->
              <br>
              <br>
              <div id="future">
                <transition name="slide-down-fade">
                  <div v-if="showFuture">
                    <p style="text-align: center;"><span style="font-size:200%; border-bottom: 2px solid #666; color: #666;">将来のこと</span></p>

                    <p class="profile-text" style="margin-top:5%;">
                      <span style="font-weight: bold;">自分でコードを書くエンジニアでいたい</span>と思っておりますが、以下のようなマネジメント領域も出来たらと思っています。<br>
                      <br>
                      ・エンジニアの教育<br>・生産性を向上させる環境作り<br>・ユーザー分析、最適化提案
                      <br>
                      <br>
                      技術の俗人化はさせず、お客様へ良い物を安定して提供していけたらと考えております。
                    </p>
                  </div>
                </transition>
              </div>
              <!-- /future -->
              <br>
              <br>
              <div id="interest">
                <transition name="slide-down-fade">
                  <div v-if="showInterest">
                    <p style="text-align: center;"><span style="font-size:200%; border-bottom: 2px solid #666; color: #666;">業界への興味</span></p>

                    <p class="profile-text" style="margin-top:5%;">
                      特定業界への強いこだわりはありません。
                      <br>
                      <br>
                      あえて書くとするならば人々に求められる物を作ることが出来たらと思います。<br>
                      こんな物を作ったんだぞと将来自分の子供に自慢できるようなビジネスに携わることが出来たならば、これ以上の喜びはございません。
                      <br>
                      <br>
                    </p>
                  </div>
                </transition>
              </div>
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

            <div class="history-categories">
              <div>
                <div>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(0)} mode="out-in" @click="changeHistoryCategory(0)" name="all">All</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(1)} mode="out-in" @click="changeHistoryCategory(1)" name="php">PHP</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(2)} mode="out-in" @click="changeHistoryCategory(2)" name="ios">iOS</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(3)} mode="out-in" @click="changeHistoryCategory(3)" name="android">Android</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(4)} mode="out-in" @click="changeHistoryCategory(4)" name="ruby">Ruby</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(5)} mode="out-in" @click="changeHistoryCategory(5)" name="windows">Windows</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(6)} mode="out-in" @click="changeHistoryCategory(6)" name="windows">Management</h6></transition>
                  <transition name="slide-left"><h6 class="history-category-button" v-bind:class={'is-selected-history-category':isSelectedHistoryCategory(7)} mode="out-in" @click="changeHistoryCategory(7)" name="windows">Other</h6></transition>
                </div>
              </div>
            </div>
            <!-- /history-categories -->

            <div class="tab-content">

              <transition name="fade">
                <div class="history-background" v-if="isHistoryShown">
                  <div class="history-contents">
                    <br>
                    <h4 class="history-company-title-atp">株式会社エーティ・プランニング</h4>
                    <div>
                      
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(5)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows ActiveDirectory" , "info"=>"言語 : C++ , ShellScript<br>環境 : Windows Server Active Directory<br>人数 : 2人<br>期間 : 2013 年 5 月 ~ 2013 年 11 月" , "title"=>"省庁系ローカルネットワーク環境における<br>Active Directory テスト環境構築、及び実運用を想定した変更対応手順等の確立案件" , "body"=>"Windows Server 2008 R2 環境での Active Directory サーバの構築を担当しました。<br>グループポリシーの適用検証や組織改変対応、ldifde コマンドを用いた Active Directory 上のユーザ、グループ変更がメイン業務でした。<br><br>定期的に発生する大規模組織改変等に安全性、時間効率に問題を感じ csv データを基とした ldf ファイルの自動生成スクリプトを作成しました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(5)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows SharePoint" , "info"=>"言語 : なし<br>環境 : Windows Server SharePoint<br>人数 : 2人<br>期間 : 2013 年 12 月 ~ 2014 年 2 月" , "title"=>"省庁系 ローカルネットワーク構築案件への入札提案資料作成" , "body"=>"使用技術の調査、要求サーバスペックを前提としたサーバ費用見積もり<br>ライセンス費用等をもとにした合計費用の見積もりや構築期間を提案資料としてまとめ、入札へ臨みました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(5)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Windows SharePoint" , "info"=>"platform : Windows Server 2012 、 SharePoint 、 Exchange 、 Lync 、 Linux<br>人数 : 3人<br>期間 : 2014 年 3 月 ~ 2016 年 5 月<br>言語 : C++ 、 ShellScript<br>サーバ規模 : Webフロントエンド 6 台、 アプリケーションサーバ 2 台、インデックスサーバ 4 台、 データベースサーバ 4 台" , "title"=>"省庁系、SharePoint グループウェアサーバの構築" , "body"=>"Windows Server 2012 環境での SharePoint 2013 サーバの構築を担当しました。<br>顧客との機能面の打ち合わせやレイアウトの取り決めからスタートし、構築フェーズでは基本レイアウトやページテンプレートの作成、Exchange Lync といった他サーバとの繋ぎ込みを含む全工程を担当しました。<br><br>大規模な組織改変が定期的に行われることが前提としてあったため、csv データを基とした一括変更適用の ShellScript の改修も実施しました。<br><br>本番環境に似せたプライベートネットワーク環境を Hyper-V を用いて開発した実績もございます。<br>計 25 台の仮想マシンを構築し運用手順も含め開発、納品しました。<br><br>仮想マシンであるため普段は起動しないで運用する時間もあったため、安全な起動停止を実現する Windows ShellScript の開発も担当しました。" ]) ?>
                        </div>
                      </transition>
                    </div>
                    <h4 class="history-company-title-rsa">Web / スマートフォン アプリ開発企業</h4>
                    <div>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(6)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Management" , "info"=>"platform : iOS / Android / Ruby / PHP<br>人数 : 10人前後<br>期間 : 2017 年 5 月 ~ 継続<br>言語 : 社内開発環境全て" , "title"=>"社内開発部門 マネジメント" , "body"=>"社内開発部門の部門長としてプロジェクト管理、他部門との連携、スケジュール調整、進捗管理といったマネジメント全般を担当。<br>各プロジェクトの企画から開発、リリースまでを一貫して完遂して参りました。<br><br>進捗芳しく無いプロジェクトのサポート、仕様変更に伴うスケジュール再見積もりといった業務も並行して行い、複数プロジェクトを同時に管理しておりました。<br><br>開発に使用するハードウェア選定、サーバスペックの見積もり、社内 SE 的な対応、エンジニア / 非エンジニア を問わず技術的な質問窓口としても行動していたことが主な実績として挙げられます。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(2) || isSelectedHistoryCategory(3)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2016 年 6 月 ~ 後述の言語移行後、現在も継続<br>言語 : Objective-C / Android Java" , "title"=>"BtoC iOS / Android アプリケーション開発" , "body"=>"Objective-C / Android Java を用いたスマートフォン両プラットフォーム向けのアプリケーション開発を担当。<br>API の取得や課金実装、GCM Push 通知に関する設定や各種レイアウト作成を担当しました。<br>新規プロジェクトの作成からリリースまで一貫して担当しており、ストアに関する操作や新アカウントの開設等も問題なく可能です。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(2) || isSelectedHistoryCategory(3)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2016 年 12 月 ~ 2017 年 2 月<br>言語 : Objective-C / Swift / Android Java / Kotlin" , "title"=>"iOS / Android アプリケーション 開発言語移行" , "body"=>"Objective-C / Android Java で作成されていたプロジェクトを Swift / Kotlin 言語で作り直しました。<br>過去のプロジェクトでは長期運用を想定したコード実装がなされておらず、また、同一処理のカスタムView化等も行われておらず、<br>既存のアプリ仕様を守った形で完全に作り直した形となります。<br><br>基礎構文や基本機能はもちろんのこと、API通信、非同期処理、noSQL等も全て実装しました。<br>移行後のプロジェクトの追加開発、運用は継続して実施しております。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(4)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web API" , "info"=>"platform : Web<br>人数 : 1人<br>Framework : Ruby on Rails<br>期間 : 2017 年 3 月 ~ 2018 年 3 月<br>言語 : Ruby" , "title"=>"Rails API 改修業務" , "body"=>"自社、他社からアクセスの発生する API 機能の改修業務。<br>新規コンテンツ用定義ファイルの追加、各種ロジックの作成や json 出力処理等を開発しておりました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(7)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Storage" , "info"=>"platform : Windows<br>人数 : 1人<br>期間 : 2018 年 5 月 ~ 2018 年 6 月" , "title"=>"社内ファイルサーバ構築" , "body"=>"クラウド環境で構築していたファイルサーバの維持費用が肥大化しており、<br>社内環境でファイルサーバを構築、外部からは VPN で接続するよう環境を整備しました。<br><br>Windows 10 をベースに環境であることからセッション上限が 20 となっていたため、タスクスケジューラで使用していないセッションを定期的に削除する等の対応も行いました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(6)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"SES" , "info"=>"期間 : 2017 年 4 月 ~ 現在" , "title"=>"SES 事業運用サポート" , "body"=>"外部向けスキルシートの作成、ポートフォリオ作成等対応<br>及び面談練習等も担当しておりました。<br>年間単位での想定コストと売り上げ目標の定義や退職率低下のための取り組みを行い、スタートアップから黒字好転までを達成。<br><br>継続した事業成長が出来るよう市場で求められる技術、分野のリサーチ、人員の組織化も担当し安定した運用体制を構築しました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(2) || isSelectedHistoryCategory(3)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2019 年 4 月 ~ 2017 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android 長期運用形アプリの開発" , "body"=>"複数コンテンツの集約型アプリケーションの開発業務<br>レイアウト構築、API通信、DB管理等全開発を担当。<br><br>長期的に運用、改修を可能とするための構造設計、カスタムViewの作成等を意識して構築しておりました。<br>通信量が肥大化しないよう API 側の更新を検知する形で実装することで通信時間を削減、API側の負荷とユーザービリティを意識した開発を行いました。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(2) || isSelectedHistoryCategory(3)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"iOS / Android" , "info"=>"platform : iOS / Android<br>人数 : 1人<br>期間 : 2018 年 4 月 ~ 2018 年 7 月<br>言語 : Swift / Kotlin" , "title"=>"iOS / Android サブスクリプション型アプリケーション開発" , "body"=>"月額定期購読型アプリケーションの開発業務<br>定期購読者向け特典機能の実装、割引購入処理等の実装をはじめとし、<br>各種レイアウト、設計、構築、テストを担当" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(1)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : CakePHP<br>期間 : 2019 年 4 月 ~ 6月 運用継続<br>言語 : PHP" , "title"=>"CakePHP Web コンテンツの開発業務" , "body"=>"サーバ環境は AWS BeansTalk で構築。<br>CakePHP で複数決済システム向け環境を構築。<br>rakuten や biglobe といった決済システム毎の URL を作成し決済参照先を制御する等、将来的な決済システムの追加等にも耐えられる柔軟な構造を意識して開発しておりました。<br><br>これらの経験もあることから、決済システムの仕様書読解からリリースまで問題なく可能です。" ]) ?>
                          <br>
                        </div>
                      </transition>
                      <transition name="fade">
                        <div v-if="isSelectedHistoryCategory(1)">
                          <?= $this->element('Portfolio/accordion' , [ "head"=>"Web" , "info"=>"platform : Web<br>人数 : 2人<br>Framework : WordPress<br>期間 : 2020 年 2 月 ~ 2020 年 4 月" , "title"=>"Owned Media 型 wordPress サイトの構築" , "body"=>"Docker で検証環境を構築し、AWS で実サイトを構築しました。<br>テンプレートの導入からプラグインの導入、wordPress 本体の php の編集も少量行いました。<br>wordPress 本体を変更すると将来的なリスクが大きいため、基本はプラグインを用いた形で構築。<br>また、CMS を用いた管理は非エンジニアが行う想定であったため、class 名設定によって自動で作用する animation や処理の作成も担当しました。" ]) ?>
                        </div>
                      </transition>
                    </div>
                    <br>
                    <br>
                  </div>
                  <!-- /history-contents -->
                </div>
                <!-- /history-background -->
              </transition>
            </div>
            <!-- /tab-content -->
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
                    <div class="skills-body"><h6>実務ではツール作成をメインで行い、趣味のゲーム作りでは 5 年間開発を行っていました。メインメソッドの作成からクラス定義、シーン管理まで実装可能です。<br><br>ゲーム作りでは DXライブラリ を使用し 2D / 3D どちらも開発しました。個別オブジェクトのステート管理や 3D カメラ運動計算、マップチップエディタ、最短経路探索等自作経験有り。<br><br> C++ / DXライブラリ</h6></div>
                    <div style="background-color: darkgoldenrod; color: black;"><h6>C++</h6></div>
                  </div>
                  <div>
                    <div style="background-color: red; color: white; clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);"><h6>Ruby</h6></div>
                    <div class="skills-body"><h6>実務では Rails で構成された既存 API の保守運用、個人開発では Rails を導入した簡単な API 構築に使用した経験があります。json 形式での hash 加工等が可能です。<br><br>gem 管理等は経験がほとんどございませんが、framework の基本構造は cakePHP と近しいため、それらの知識を活かせるのではないかと思います。<br><br>Ruby / Ruby on Rails / html / css / javascript</h6></div>
                  </div>
                  <div>
                    <div class="skills-body"><h6>docker-compose ファイルの作成経験有り。<br>docker-compose 関連ファイルを共有して開発環境を共有できるよう構築した経験がございます。<br><br>php や mysql といった container で動作するサービスの config ファイルリンク、プロジェクトの DocumentRoot リンク等も可能です。<br><br>ネットワーク関連の知識も有することから様々なケースに対応出来ます。</h6></div>
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
                          <h1 style="text-align: center;">please scroll</h1>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(2,6)" style="left: 0; bottom:0; width: 100%; height: 5vw; background-color: #0005;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-left-rotate-fade">
                        <div v-if="tab4ShowAnimPeriod(1,6)" style="left: 0; bottom: 0; width: 10vw; height: 10vw; background-color: black;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="slide-right-fade-large">
                        <div v-if="tab4ShowAnimPeriod(2,6)" style="right: 0; top:0; width: 100%; height: 5vw; background-color: #0005;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-right-rotate-fade">
                        <div v-if="tab4ShowAnimPeriod(1,6)" style="right: 0; top: 0; width: 10vw; height: 10vw; background-color: black;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(2,6)" style="width: 100%; top: 30%; bottom: 70%; color: #888;">
                          <h1 style="margin-left: 20%; font-size: 200%;">好きなことなど色々</h1>
                          <div style="margin-left: 25%;">
                            <h2 style="font-size: 150%;">・開発で好きなこと</h2>
                            <h2 style="font-size: 150%;">・趣味</h2>
                          </div>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <!---------------------------------------
                        page2
                    ---------------------------------------->

                    <div>
                      <transition name="slide-up-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 3vw; height: 100%; left: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-down-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 3vw; height: 100%; right: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-left-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 3vw; top: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    <div>
                      <transition name="slide-right-fade-large">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 3vw; bottom: 0%; background-color: #888;">
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; height: 100%;">
                          <div style="top: 0; left: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="top: 0; right: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="bottom: 0; left: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                          <div style="bottom: 0; right: 0; width: 6vw; height: 6vw; background-color: black;"></div>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->
                    
                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(7,11)" style="width: 100%; top: 30%; bottom: 70%; color: #888;">
                          <h1 style="text-align: center; font-size: 200%;">開発で好きなこと</h1>
                          <div style="width: 80vw; margin: 0 10vw;">
                            <div class="window-gray" style="width: 70vw; height: auto;">
                              視覚的に楽しい物、機能性の高い物を開発することが好きです。<br><br>汎用的ツール開発や 1 機能特化型シェルの作成も好きで、何かと役立つ物を作るのが好きなのだと思います。<br><br>どちらかといえばフロントエンドのほうが好き。
                            </div>
                          </div>
                        </div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <!---------------------------------------
                        page3
                    ---------------------------------------->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(11,20)" style="width: 100%; height: 100%; background-color: #d2b48c;"></div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(12,20)" style="width: 100%; height: 100%; background-color: #8b4513; clip-path: polygon(100% 0, 0 0, 0 100%);"></div>
                      </transition>
                    </div>
                    <!-- /div -->

                    <div>
                      <transition name="slide-flat-rotate-fade">
                        <div v-if="tab4ShowAnimPeriod(13,20)" style="left:25vw; top:3vh">
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
                        <div v-if="tab4ShowAnimPeriod(14,20)" style="left:25vw; top: 25vh;">
                          <div style="width: 60vw; height: auto; color: white; background-color: #6668; border-radius: 240px 15px 100px 15px / 15px 200px 15px 185px; padding: 20px;">
                            趣味はゲームで、最近だとオンライン要素のあるゲームのプレイ頻度が高くなっています。<br><br>
                            FF14 や FromSoftware の DarkSouls<br>
                            Splatoon や BorderBreak といった TPS ゲームもプレイする雑食系。<br>
                            <br>
                            BorderBreak が特に好きで、シミュレーションツールやブログといったファンサイトを公開しております。<br>
                            <a style="color:blue;" href="/simulator">BBPS4アセンシミュレータ</a><br>
                            <a style="color:blue;" href="/blog">KMS blog</a><br><br>
                            今後もツール制作等は趣味として続けていきたいと思っています。
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
                        <div v-if="tab4ShowAnimPeriod(17,100)" style="width: 100%; height: 100%; background-color: #808000;"></div>
                      </transition>
                    </div> 
                    <!-- /div -->

                    <div style="pointer-events: none; width: 88%; top: 15%; left: 6%;">
                      <transition name="fade">
                        <div v-if="tab4ShowAnimPeriod(18,100)">
                          <p style="text-align: center;">
                            <span style="font-size:200%; border-bottom: 2px solid white; color: white;">
                              最後に
                            </span>
                          </p>
                          <p style="text-align: center;">
                            <span style="font-size:120%; color: white;">
                              <br>
                              仕事とは単なるお金のやり取りではなく、相互の信頼関係、楽しさが不可欠であると考えております。<br>
                              常に誠実であることを大切に全力投球させていただく所存です。<br>
                              <br>
                              <br>
                              本ポートフォリオは以上となります。<br>
                              ここまでご覧いただき誠にありがとうございました。<br>
                              <br>
                              ご興味を持っていただけましたら幸いです。<br>
                              何卒よろしくお願いいたします。<br>
                              <br>
                              ~ Keita.Sugiyama ~ 
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
                
                <div style="height: 1000vh;"></div> <!-- scroll size -->

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


