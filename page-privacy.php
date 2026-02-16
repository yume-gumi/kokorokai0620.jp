<?php get_header();  ?>
<main id="privacy">

    <h4 class="service-head">プライバシーポリシー</h4>

    <div class="wave-top wave-green"></div>


    <section id="privacy-policy" class="bg-green">
        <div class="privacy-outer">

            <div class="privacy-block">
                一般社団法人こころ会（以下、「当サイト」と言います。）では、お客様からお預かりする個人情報の重要性を強く認識しており、個人情報の保護に関する法律、その他の関係法令を遵守すると共に、以下に定めるプライバシーポリシーに従って、個人情報を安全かつ適切に取り扱うことを宣言します。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>１．個人情報の定義</span>
                本プライバシーポリシーにおいて、個人情報とは生存する個人に関する情報であり、氏名、生年月日、住所、電話番号、メールアドレス等、特定の個人を識別できるものをいいます。
            </div>
            <!-- tell-block -->
            <div class="privacy-block" break>
                <span>２．個人情報の管理</span>
                お客様からお預かりした個人情報は、不正アクセス、紛失、漏えい等が起こらないよう、慎重かつ適切に管理します。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>３．個人情報の利用目的</span>
                当サイトでは、お客様からのお問い合わせを通じて、お客様の氏名、生年月日、住所、電話番号、メールアドレス等の個人情報をご提供いただく場合があります。その場合は、以下に示す利用目的のために、適正に利用するものと致します。
                <br><br>
                ・お問い合わせに対する回答<br>
                ・当サイトを改善するために必要な分析などを行うため
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>４．個人情報の第三者提供</span>
                お客様からお預かりした個人情報を、個人情報保護法その他の法令に基づき開示が認められる場合を除き、お客様ご本人の同意を得ずに第三者に提供することはありません。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>５．個人情報の開示・訂正・削除について</span>
                お客様からお預かりした個人情報の確認、訂正・削除等をご希望の場合、お客様ご本人が当サイトのお問い合わせフォームよりお申し出ください。適切な本人確認を行った後、速やかに対応いたします。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>６．Cookie（クッキー）について</span>
                Cookie（クッキー）とは、お客様のサイト閲覧履歴を、お客様のコンピュータにデータとして保存しておく仕組みです。<br>
                なお、Cookieに含まれる情報は当サイトや他サイトへのアクセスに関する情報のみであり、氏名、生年月日、住所、電話番号、メール アドレス等の個人情報は含まれません。従って、Cookieに保存されている情報からお客様個人を特定することはできません。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>７．著作権について</span>
                当サイトに掲載している、文章・画像・動画等の著作物を無断で複製し、転載することを禁じます。<br>
                なお、当サイトに掲載している文章を引用する際は、出典元の明記をお願い致します。
            </div>
            <!-- tell-block -->
            <div class="privacy-block">
                <span>８．本ポリシーの変更について</span>
                当サイトは、法令の制定、改正等により、本ポリシーを適宜見直し、予告なく変更する場合があります。<br>
                本ポリシーの変更は、変更後の本ポリシーが当サイトに掲載された時点、またはその他の方法により変更後の本ポリシーが閲覧可能となった時点で有効になります。
            </div>
            <!-- tell-block -->

            <div class="privacy-block">
                以上<br>
                <br>
                制定日：〇〇年〇月〇日
            </div>
            <!-- tell-block -->




        </div>
        <!-- privacy-outer -->

    </section>
    <!-- privacy-policy -->


    <?php
    $args  =  [
        "top-wave"  =>  "green",
        "background"  =>  "orange",
        "service"  =>  true
    ];
    get_template_part("parts/footer_top",  null, $args);
    ?>

</main>

<?php get_footer();  ?>