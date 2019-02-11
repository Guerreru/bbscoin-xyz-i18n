<?php
if(!defined('IN_HOME')) exit;

$lang = array_merge($lang, [
'html_lang' => 'ru',
'html_dir' => 'ltr', //left to right
'description' => 'BBSCoin [BBS] - это криптовалюта для обмена виртуальных кредитов с форумов и сайтов',
'keywords' => 'BBSCoin,coin,cryptocurrency',
'twitter_title' => 'BBSCoin | Веб-сайт',
'navi_home' => 'Главная',
'navi_technology' => 'Технология',
'navi_roadmap' => 'Дорожная карта',
'navi_download' => 'Скачать',
'navi_ecosystem' => 'экосистема',
'webwallet' => 'Веб кошелек',
'navi_followus' => 'Следуйте за нами',
'navi_forums' => 'Форумы',
'subtitle_home' => ' - криптовалюта для обмена виртуальными кредитами с форумов и сайтов',
'subtitle_ecosystem' => ' - экосистема',
'subtitle_download' => ' - Скачать',
'home_desc' => '<strong>BBSCoin<br />Криптовалюта для обмена виртуальных кредитов с форумов и сайтов</strong>',
'home_desc_below' => 'Открывая дверь для ваших кредитов, кармы, очков, репутации на весь мир',
'home_more_btn' => 'Узнать больше',
'home_about_title' => 'Мы создаем безопасную криптовалюту<br />Ведите свой сайт успешно',
'home_about_desc' => 'BBSCoin - это криптовалюта, предназначенная для обмена виртуальными кредитами. Будь то виртуальная валюта с форума, сайт коллеги из Slack / HipChat или точка, собранная с Karma. BBS действует как мост для большого мира.',
'ring_signatures' => 'Кольцевые подписи',
'ring_signatures_desc' => 'Мы используем Кольцевые подписи, чтобы обеспечить вам настоящую конфиденциальность, чтобы вы могли интегрировать все, что вам нужно.',
'platform' => 'Платформа',
'platform_desc' => 'Мы думаем, что монета сама по себе ничего не значит. Таким образом, экосистема и простой в использовании API были спланированы с самого начала.',
'algo' => 'Cryptonight v7',
'algo_desc' => 'Мы сделали монету легкой для майнинга, чтобы каждый мог принять участие.',
'184billion' => '184 миллиарда',
'184billion_desc' => 'Нам не нужно беспокоиться о дробях, потому что мы разработали монеты, чтобы иметь большой запас.',
'get_bbscoin' => 'Присоединяйтесь сейчас!',
'first_half_2018' => 'Первая половина 2018 года',
'second_half_2018' => 'Вторая половина 2018 года',
'long_term' => 'Долгосрочный',
'done' => 'Готово',
'desktop_wallet' => 'PC кошелек',
'official_pool' => 'Официальный пул',
'pool_upgrade' => 'Обновление пула для поддержки последней версии Node.js',
'discuz_integration' => 'Discuz! завершение',
'phpwind_integration' => 'Интеграция Phpwind',
'mybb_integration' => 'интеграция с myBB',
'smf_integration' => 'SMF интеграция',
'first_exchange_listing' => 'Первый список сделок',
'difficulty_algorithm_update' => 'Обновление алгоритма сложности',
'cnv7_update' => 'Cryptonight v7 fork для защиты от BBS ASIC',
'web_wallet_api' => 'API веб-кошелька для интеграции',
'web_wallet_api_doc' => 'Документация по API для API веб-кошелька',
'internationalization_websites' => 'Интернационализация официальных сайтов',
'web_hook_for_api' => 'Веб-хук для API веб-кошелька',
'update_all_plugins' => 'Обновите все плагины форума для использования API Web Wallet',
'increase_adoption' => 'Увеличение принятия BBS на веб-сайтах и форумах',
'bounty_program' => 'Баунти программа',
'new_air_drop' => 'New air-drop сайт и второй раунд air-drop',
'web_miner_title' => 'Web Miner',
'web_miner' => 'Веб-майнер в браузере',
'continuous_improving_api' => 'Постоянное совершенствование API и документации',
'continuous_improving_web_wallet' => 'Постоянное улучшение скорости обработки веб-кошелька',
'rewrite_desktop_wallet' => 'Перепишите настольный кошелек',
'more_exchanges' => 'Больше обменов',
'android_app' => 'Android-приложение',
'iphone_app' => 'приложение для iPhone',
'enhanced_integrations' => 'Улучшенная интеграция',
'site_admin_service_platform' => 'Платформа управления сайтом',
'learn_more_btn' => 'ХОТИТЕ УЗНАТЬ БОЛЬШЕ?',
'follow_us_title' => 'Подписывайтесь на нас!',
'twitter' => 'Twitter',
'bbscoin_twitter' => 'BBSCoin Twitter',
'discord' => 'Discord',
'bbscoin_discord' => 'BBSCoin Discord',
'telegram' => 'Telegram',
'bbscoin_telegram' => 'BBSCoin Telegram',
'github' => 'Github',
'bbscoin_github' => 'BBSCoin Github',
'block_explorer' => 'Block Explorer',
'pool' => 'Pool',
'pools' => 'Pools',
'pools_list' => 'Pools List',
'whitepaper' => 'Whitepaper',
'mining' => 'Mining',
'exchanges' => 'Exchanges',
'api' => 'API',
'crex24' => 'Crex24',
'altex.exchange' => 'Altex.exchange',
'tradeogre' => 'TradeOgre',
'bbs.money' => 'BBS.money',
'bbs.money_api' => 'BBS.money API',
'windows' => 'Windows',
'linux' => 'Linux',
'macosx' => 'macOS',
'plugins' => 'Plugins',
'blockchain' => 'Blockchain',
'height' => 'Height',
'for_mybb' => 'For MyBB',
'for_smf' => 'For SMF',
'for_discuz' => 'For Discuz',
'for_phpwind' => 'For PHPWind',
'desktop_wallet_x64' => 'Desktop Wallet x64',
'command_line_x64' => 'Command Line x64',
'wallet_for_ubuntu' => 'Wallet for Ubuntu',
'wallet_for_macos' => 'Wallet for macOS',
'cli_for_ubuntu' => 'CLI for Ubuntu',
'cli_for_centos' => 'CLI for CentOS',
'cli_for_macos' => 'CLI for macOS',
'whitepaper_url' => 'https://bbscoin.xyz/docs/ru/Whitepaper_v1.0.0.pdf',
'firstcryptobank' => 'FirstCryptoBank',
'kompler.exchange' => 'Kompler.exchange',
]);
