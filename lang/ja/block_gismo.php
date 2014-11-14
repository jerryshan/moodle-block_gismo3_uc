<?php
//GISMO JA language file
// block title
$string['pluginname'] = 'Gismo';
$string['gismo'] = 'Gismo';
$string['gismo_report_launch'] = 'レポートツール';
$string['exportlogs_missing'] = 'exportlogsパラメータがありません。';
$string['exportlogs_missingcourselogs'] = 'ログ分析処理は事前に決められた時間帯に実行されます。通常、夜間に実行されます。あなたのコースデータは24時間以内に利用できるようになります。';

// capabilities
$string['gismo:trackuser'] = 'Gismo学生';
$string['gismo:trackteacher'] = 'Gismo教師';
$string['gismo:addinstance'] = '新しいGismoブロックを追加する';

// help
$string['gismo_help'] = '<p>以下の必要条件に合致した場合のみ、Gismoはコース内で動作します:</p>
<ul>
    <li>コースに少なくとも1名の学生が登録されている必要があります。</li>
    <li>以下のモジュールから、少なくとも1つのインスタンスが作成されている必要があります:
        <ul>
            <li>リソース</li>
            <li>課題</li>
            <li>小テスト</li>
        </ul>
    </li>
</ul>';

// General
$string['page_title'] = "Gismo - ";
$string['file'] = 'ファイル';
$string['options'] = 'オプション';
$string['print'] = '印刷';
$string['exit'] = '終了';
$string['help'] = 'ヘルプ';
$string['home'] = 'Gismoホーム';
$string['close'] = '閉じる';

$string['users'] = 'ユーザ'; //************
$string['teachers'] = '教師'; //************

// Students
$string['students'] = '学生';
$string['student_accesses'] = '学生によるアクセス';
$string['student_accesses_chart_title'] = '学生: 学生によるアクセス';
$string['student_accesses_overview'] = 'アクセス概要';
$string['student_accesses_overview_chart_title'] = '学生: アクセス概要';
$string['student_resources_overview'] = 'リソースのアクセス概要';
$string['student_resources_overview_chart_title'] = '学生: リソースのアクセス概要';
$string['student_resources_details_chart_title'] = '学生: リソースの学生詳細';

// Resources
$string['resources'] = 'リソース';
$string['detail_resources'] = 'リソース詳細';
$string['resources_students_overview'] = '学生概要';
$string['resources_students_overview_chart_title'] = 'リソース: 学生概要';
$string['resources_access_overview'] = 'アクセス概要';
$string['resources_access_overview_chart_title'] = 'リソース: アクセス概要';
$string['resources_access_detail_chart_title'] = 'リソース: 学生のリソース詳細';

// Activities
$string['activities'] = '活動';
$string['assignments'] = '課題';
$string['assignments_chart_title'] = '活動: 課題概要';
$string['assignments22'] = '課題2.2';
$string['assignments22_chart_title'] = '活動: 課題2.2概要';

$string['chats'] = 'チャット';
$string['chats_over_time'] = 'チャット時系列'; //************
$string['chats_chart_title'] = '活動:チャット概要';
$string['chats_ud_chart_title'] = '活動: チャットの学生詳細';
$string['chats_over_time_chart_title'] = '活動: チャット投稿時系列';

$string['forums'] = 'フォーラム';
$string['forums_over_time'] = 'フォーラム時系列'; //************
$string['forums_chart_title'] = '活動: フォーラム概要';
$string['forums_ud_chart_title'] = '活動: フォーラムの学生詳細';
$string['forums_over_time_chart_title'] = '活動: フォーラム投稿時系列';

$string['quizzes'] = '小テスト';
$string['quizzes_chart_title'] = '活動: 小テスト概要';

$string['wikis'] = 'Wiki';
$string['wikis_over_time'] = 'Wiki時系列';
$string['wikis_chart_title'] = '活動: Wiki概要';
$string['wikis_ud_chart_title'] = '活動: Wikiの学生詳細';
$string['wikis_over_time_chart_title'] = '活動: Wiki投稿時系列';

// Help
$string['help'] = 'ヘルプ';
$string['help_docs'] = '概要';
$string['tutorial'] = 'チュートリアル';
$string['about'] = 'About Gismo';

$string['date'] = '日付';
$string['from'] = 'From';
$string['to'] = 'To';

$string['show'] = '表示'; //************
$string['list'] = 'リスト'; //************

$string['menu_hide'] = 'メニューを隠す'; //************
$string['menu_show'] = 'メニューを表示する'; //************
$string['detail_show'] = '詳細を表示する'; //************

$string['items'] = 'アイテム'; //************
$string['details'] = '詳細'; //************
$string['info_title'] = 'GISMO - リスト'; //************
$string['info_text'] = '<p>グラフをカスタマイズする場合、あなたは使用可能なメニューよりアイテムを選択/選択解除することができます。</p>";
        message += "<p>インストラクション</p>";
        message += "<ul style=\'list-style-position: inside;\'>";
        message += "<li>メインチェックボックス: すべてのリストアイテムを選択/選択解除します。</li>";
        message += "<li>アイテムクリック: アイテムを選択/選択解除します。</li>";
        message += "<li>アイテム Alt+クリック: クリックされたアイテムのみ選択します。</li>";
        message += "<li><img src=\'images/eye.png\'> アイテム詳細を表示します。</li>";
        message += "</ul>'; //************

// Errors
$string['err_course_not_set'] = 'コースIDが設定されていません!';
$string['err_block_instance_id_not_set'] = 'ブロックインスタンスIDが設定されていません!';
$string['err_authentication'] = 'あなたは認証されていません。Moodleセッションの有効期限が切れた可能性があります。<br /><br /><a href="">ログイン</a>';
$string['err_access_denied'] = 'あなたにはこの処理を実行する権限が与えられていません。';
$string['err_srv_data_not_set'] = '1つまたはそれ以上の必須パラメータがありません!';
$string['err_missing_parameters'] = '1つまたはそれ以上の必須パラメータがありません!';
$string['err_missing_course_students'] = 'コースの学生を抽出できません!';
$string['gismo:view'] = 'GISMO - 認証失敗';

//OTHERS
$string['welcome'] = 'GISMO v. 3.3へようこそ';
$string['processing_wait'] = 'データを処理しています、お待ちください!';

//Graphs labels
$string['accesses'] = "アクセス";
$string['timeline'] = "タイムライン";
$string['actions_on'] = '操作:';
$string['nr_submissions'] = '送信数';

//OPTIONS
$string['option_intro'] = 'このセクションでは、特定のアプリケーションオプションをカスタマイズすることができます。';
$string['option_general_settings'] = '一般設定';
$string['option_include_hidden_items'] = '非表示アイテムを含む';
$string['option_chart_settings'] = 'チャット設定';
$string['option_base_color'] = 'ベースカラー';
$string['option_red'] = '赤';
$string['option_green'] = '緑';
$string['option_blue'] = '青';
$string['option_axes_label_max_length'] = 'Axesラベル最大長 (文字)';
$string['option_axes_label_max_offset'] = 'Axesラベル最大オフセット (文字)';
$string['option_number_of_colors'] = '色数 (マトリックス図)';
$string['option_other_settings'] = 'その他の設定';
$string['option_window_resize_delay_seconds'] = 'ウィンドウリサイズ遅延 (秒)';
$string['save'] = '保存';
$string['cancel'] = 'キャンセル';

$string['export_chart_as_image'] = 'GISMO - グラフをイメージとしてエクスポートする';
$string['no_chart_at_the_moment'] = '現在のところ、グラフはありません!';

$string['about_gismo'] = 'About GISMO';
$string['intro_information_about_gismo'] = 'このリリースの詳細は下記のとおりです:';
$string['gismo_version'] = 'バージョン ';
$string['release_date'] = 'リリース日 ';
$string['authors'] = '開発者';
$string['contact_us'] = '質問等、開発者にお気軽にお問い合わせください。また、バグの報告は次のメールアドレスまで:';
$string['close'] = '閉じる';
$string['confirm_exiting'] = '本当にGismoを終了してもよろしいですか?';

//Settings
$string['manualexportpassword'] = '手動エクスポートパスワード';
$string['manualexportpassworddesc'] = 'この設定により、パスワードなしでは下記URIからexport_data.phpスクリプトを実行できないようになります。:<br /><br />http://site.example.com/blocks/gismo/lib/gismo/server_side/export_data.php?password=something<br /><br />空白の場合、パスワードは要求されません。';
$string['manualexportpassworderror'] = 'GISMO手動エクスポートパスワードが設定されていないか間違っています。';
$string['export_data_limit_records'] = 'SQLクエリのレコード制限';
$string['export_data_limit_recordsdesc'] = 'データエクスポート中、それぞれのクエリ (GISMOdata_manager.php内) に対して選択されるレコード数を制限します。
<br />あなたが何をしているのか分からない場合、設定を変更しないでください。';
$string['export_data_hours_from_last_run'] = '次のエクスポート処理実行までの遅延 (時間)';
$string['export_data_hours_from_last_rundesc'] = 'Gismoデータエクスポート処理は、X時間後のみ実行することができます。この設定値が低すぎる場合、パフォーマンスに問題が生じる可能性があります。<br /> あなたが何をしているのか分からない場合、設定を変更しないでください。';
$string['export_data_run_inf'] = 'Gismoデータエクスポート開始時間';
$string['export_data_run_infdesc'] = 'この時間からのみGismoデータエクスポートを実行します。<br />この設定は「export_data_run_sup」より早い時間にする必要があります。';
$string['export_data_run_sup'] = 'Gismoデータエクスポート終了時間';
$string['export_data_run_supdesc'] = 'この時間以降、Gismoデータエクスポートを実行しません。<br />この設定は「export_data_run_inf」より遅い時間にする必要があります。';
$string['exportlogs'] = 'ログをエクスポートする';
$string['exportlogsdesc'] = 'すべてのログをエクスポートする: このオプションでは、Moodle内のすべてのコースよりGismoログを作成します。Gismoデータベーステーブル内に多くのレコードを作製しますが、コース内にGismoブロックが追加された時点ですぐにデータを利用することができます。<br />Gismoブロックのあるコースのみエクスポートする: Gismoブロックが設置されているコースのみエクスポートします。このオプションを選択した場合、あなたがコース内にGismoブロックを追加して数時間経過した後、Gismoデータを利用することができるようになります。';
$string['exportalllogs'] = 'すべてのログをエクスポートする';
$string['exportcourselogs'] = 'Gismoブロックのあるコースのみエクスポートする';
$string['debug_mode'] = 'デバッグモード';
$string['debug_modedesc'] = 'この設定を有効にした場合、Gismoデータエクスポート処理中にデバッグメッセージが表示されます。';
$string['debug_mode_true'] = '有効';
$string['debug_mode_false'] = '無効';
$string['student_reporting'] = '学生レポート';
$string['student_reporting_desc'] = 'この設定を有効にした場合、学生が自分のログを閲覧することができます。';
$string['student_reporting_enabled'] = '有効';
$string['student_reporting_disabled'] = '無効';

//Completion
$string['completion'] = '完了';
$string['completion_quiz_menu'] = '小テスト';
$string['completion_quiz_chart_title'] = '小テスト完了';
$string['completion_assignment_menu'] = '課題';
$string['completion_assignment_chart_title'] = '課題完了';
$string['completion_assignment22_menu'] = '課題2.2';
$string['completion_assignment22_chart_title'] = '課題2.2完了';
$string['completion_resource_menu'] = 'リソース';
$string['completion_resource_chart_title'] = 'リソース完了';
$string['completion_forum_menu'] = 'フォーラム';
$string['completion_forum_chart_title'] = 'フォーラム完了';
$string['completion_wiki_menu'] = 'Wiki';
$string['completion_wiki_chart_title'] = 'WIki完了';
$string['completion_chat_menu'] = 'チャット';
$string['completion_chat_chart_title'] = 'チャット完了';
$string['completion_completed_on_tooltip'] = '完了:';
$string['completion_completed_on_tooltip_months'] = '[\'1月\',\'2月\',\'3月\',\'4月\',\'5月\',\'6月\',\'7月\',\'8月\',\'9月\',\'10月\',\'11月\',\'12月\']';

//Added missing string 08.10.2013
$string['err_missing_data'] = '処理するデータが存在しないため、分析を開始できません!';
$string['err_no_data'] = 'データなし';
$string['err_cannot_extract_data'] = 'サーバからデータを抽出できません!';
$string['err_unknown'] = '不明なエラー!';

//Homepage text
$string['homepage_title'] = 'GISMOへようこそ';
$string['homepage_processing_data_wait'] = 'データ処理中、お待ちください!';
$string['homepage_processing_data'] = 'データ処理中';
$string['homepage_text'] = 'GISMOはMoodleコース管理システムからトラッキングデータを抽出するグラフィカルインタラクティブ学生モニタリングおよびトラッキングシステムです。GISMOはコースインストラクタおよび学生が学習活動の概要を取得できるよう、有用なグラフ表現も生成します。<br />GISMOの使用を開始するには、このページのトップにあるメニューの1つを選択してください。<br />あなたがチュートリアルを閲覧したい場合、メニュー「ヘルプ > チュートリアル」をクリックしてください。';
$string['homepage_charts_preview_title'] = 'チャットプレビュー';
$string['homepage_chart_activities_assignments_overview'] = '活動: 課題概要';
$string['homepage_chart_resources_access_overview'] = 'リソース: アクセス概要';
$string['homepage_chart_resources_students_overview'] = 'リソース: 学生概要';
$string['homepage_chart_students_access_overview_on_resources'] = '学生: リソースにおけるアクセス概要';
$string['homepage_chart_students_access_overview'] = '学生: アクセス概要';
$string['homepage_chart_students_accesses_by_students'] = '学生: 学生によるアクセス';

$string['hide_menu'] = 'メニューを隠す';
$string['show_menu'] = 'メニューを表示する';
$string['show_details'] = '詳細を表示する';

?>
