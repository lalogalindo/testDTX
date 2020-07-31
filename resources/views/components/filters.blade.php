<div class="filterPanel">
    <form method="POST" action="/movies">
        @csrf
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sort<i class="fas fa-chevron-right"></i></h5>
                <select id="sort_by" name="sort_by" class="">
                    <option value="popularity.desc" selected="selected">Popularity Descending</option>
                    <option value="popularity.asc">Popularity Ascending</option>
                    <option value="vote_average.desc">Rating Descending</option>
                    <option value="vote_average.asc">Rating Ascending</option>
                    <option value="primary_release_date.desc">Release Date Descending</option>
                    <option value="primary_release_date.asc">Release Date Ascending</option>
                    <option value="title.asc">Title (A-Z)</option>
                    <option value="title.desc">Title (Z-A)</option>
                </select>
            </div>
        </div>


        <div class="filter_panel card closed">
        <div class="name">
            <h2>Sort</h2>
        </div>

        <div class="filter">
            <h3>Sort Results By</h3>
        </div>
        </div>
    

    <div class="filter_panel card closed">
        <div class="name" data-callback="filterCallback()">
        <h2>Filters</h2>
        <span class="glyphicons_v2 chevron-right"></span>
        </div>

        <div class="filter">
        <h3>Show Me<span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#show_me_tooltip" data-role="tooltip"></span></h3>

        <label class="k-form-field">
            <input id="show_me_everything" class="k-radio" type="radio" name="show_me" value="0" checked="checked">
            <label for="show_me_everything" class="k-radio-label">Everything</label>
        </label>

        <label class="k-form-field">
            <input id="show_me_not_seen" class="k-radio" type="radio" value="1" name="show_me" disabled="">
            <label for="show_me_not_seen" class="k-radio-label">Movies I Haven't Seen</label>
        </label>

        <label class="k-form-field">
            <input id="show_me_seen" class="k-radio" type="radio" value="2" name="show_me" disabled="">
            <label for="show_me_seen" class="k-radio-label">Movies I Have Seen</label>
        </label>
        </div>

        <div class="filter">
        <h3>Availabilities</h3>

        <label class="k-form-field">
            <input id="all_availabilities" class="k-checkbox" type="checkbox" name="all_availabilities" value="true" checked="">
            <label for="all_availabilities" class="k-checkbox-label">Search all availabilities?</label>
        </label>

        <div id="availabilities_wrapper" class="labels hide">
            
            <label class="k-form-field">
                <input id="ott_monetization_type_flatrate" class="k-checkbox" type="checkbox" name="ott_monetization_type" value="flatrate" checked="">
                <label for="ott_monetization_type_flatrate" class="k-checkbox-label">Stream</label>
            </label>
            
            <label class="k-form-field">
                <input id="ott_monetization_type_free" class="k-checkbox" type="checkbox" name="ott_monetization_type" value="free" checked="">
                <label for="ott_monetization_type_free" class="k-checkbox-label">Free</label>
            </label>
            
            <label class="k-form-field">
                <input id="ott_monetization_type_ads" class="k-checkbox" type="checkbox" name="ott_monetization_type" value="ads" checked="">
                <label for="ott_monetization_type_ads" class="k-checkbox-label">Ads</label>
            </label>
            
            <label class="k-form-field">
                <input id="ott_monetization_type_rent" class="k-checkbox" type="checkbox" name="ott_monetization_type" value="rent" checked="">
                <label for="ott_monetization_type_rent" class="k-checkbox-label">Rent</label>
            </label>
            
            <label class="k-form-field">
                <input id="ott_monetization_type_buy" class="k-checkbox" type="checkbox" name="ott_monetization_type" value="buy" checked="">
                <label for="ott_monetization_type_buy" class="k-checkbox-label">Buy</label>
            </label>
            
        </div>
        </div>

        <div class="filter">
        
            <h3>Release Dates</h3>

            <label class="k-form-field">
            <input id="all_releases" class="k-checkbox" type="checkbox" name="all_releases" value="true" checked="">
            <label for="all_releases" class="k-checkbox-label">Search all releases?</label>
            </label>

            <div id="release_type_wrapper" class="labels hide">
            <label class="k-form-field" style="padding-bottom: 20px;">
                <input id="all_release_countries" class="k-checkbox" type="checkbox" name="all_release_countries" value="true" checked="">
                <label for="all_release_countries" class="k-checkbox-label">Search all countries?</label>
            </label>
            <div id="search_all_countries" class="hide">
                <span title="" class="k-widget k-dropdown font_size_1 kendo_dropdown" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="release_region_listbox" aria-live="polite" aria-disabled="false" aria-busy="false" aria-activedescendant="e037fae3-594d-413e-93f6-e0069490614c" style="width: 100%; margin-bottom: 10px;"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span class="dropdown_flag" style="background-image: url('https://www.themoviedb.org/assets/2/flags_v2/48/MX-6e1feed2ded1b9d724497ba082957828cffe11b6cbe53c9914f837b5fd7d914e.png')"></span><span>Mexico</span></span><span unselectable="on" class="k-select" aria-label="select"><span class="k-icon k-i-arrow-60-down"></span></span></span><input name="release_region" id="release_region" class="font_size_1 kendo_dropdown" style="width: 100%; margin-bottom: 10px; display: none;" value="MX" data-role="dropdownlist"></span>
            </div>

            
                <label class="k-form-field">
                <input id="release_type_1" class="k-checkbox" type="checkbox" name="release_type" value="1" checked="">
                <label for="release_type_1" class="k-checkbox-label">Premiere</label>
                </label>
            
                <label class="k-form-field">
                <input id="release_type_2" class="k-checkbox" type="checkbox" name="release_type" value="2" checked="">
                <label for="release_type_2" class="k-checkbox-label">Theatrical (limited)</label>
                </label>
            
                <label class="k-form-field">
                <input id="release_type_3" class="k-checkbox" type="checkbox" name="release_type" value="3" checked="">
                <label for="release_type_3" class="k-checkbox-label">Theatrical</label>
                </label>
            
                <label class="k-form-field">
                <input id="release_type_4" class="k-checkbox" type="checkbox" name="release_type" value="4" checked="">
                <label for="release_type_4" class="k-checkbox-label">Digital</label>
                </label>
            
                <label class="k-form-field">
                <input id="release_type_5" class="k-checkbox" type="checkbox" name="release_type" value="5" checked="">
                <label for="release_type_5" class="k-checkbox-label">Physical</label>
                </label>
            
                <label class="k-form-field">
                <input id="release_type_6" class="k-checkbox" type="checkbox" name="release_type" value="6" checked="">
                <label for="release_type_6" class="k-checkbox-label">TV</label>
                </label>
            
            </div>

            <div class="year_column">
            <span class="col_1 font_size_1">from</span>
            <span class="k-widget k-datepicker font_size_1" style="width: 100%;"><span class="k-picker-wrap k-state-default"><input id="release_date_gte" class="font_size_1 k-input" value="" style="width: 100%" data-role="datepicker" type="text" role="combobox" aria-expanded="false" aria-owns="release_date_gte_dateview" autocomplete="off" aria-disabled="false"><span unselectable="on" class="k-select" aria-label="select" role="button" aria-controls="release_date_gte_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
            </div>

            <div class="year_column">
            <span class="col_1 font_size_1">to</span>
            <span class="k-widget k-datepicker font_size_1" style="width: 100%;"><span class="k-picker-wrap k-state-default"><input id="release_date_lte" class="font_size_1 k-input" value="2021-01-30" style="width: 100%" data-role="datepicker" type="text" role="combobox" aria-expanded="false" aria-owns="release_date_lte_dateview" autocomplete="off" aria-disabled="false"><span unselectable="on" class="k-select" aria-label="select" role="button" aria-controls="release_date_lte_dateview"><span class="k-icon k-i-calendar"></span></span></span></span>
            </div>
        
        </div>

        <div class="filter">
        <h3>Genres</h3>
        <ul id="with_genres" class="multi_select text" name="with_genres[]">
            
            <li data-value="28"><a class="no_click" href="/discover/movie?with_genres=28">Action</a></li>
            
            <li data-value="12"><a class="no_click" href="/discover/movie?with_genres=12">Adventure</a></li>
            
            <li data-value="16"><a class="no_click" href="/discover/movie?with_genres=16">Animation</a></li>
            
            <li data-value="35"><a class="no_click" href="/discover/movie?with_genres=35">Comedy</a></li>
            
            <li data-value="80"><a class="no_click" href="/discover/movie?with_genres=80">Crime</a></li>
            
            <li data-value="99"><a class="no_click" href="/discover/movie?with_genres=99">Documentary</a></li>
            
            <li data-value="18"><a class="no_click" href="/discover/movie?with_genres=18">Drama</a></li>
            
            <li data-value="10751"><a class="no_click" href="/discover/movie?with_genres=10751">Family</a></li>
            
            <li data-value="14"><a class="no_click" href="/discover/movie?with_genres=14">Fantasy</a></li>
            
            <li data-value="36"><a class="no_click" href="/discover/movie?with_genres=36">History</a></li>
            
            <li data-value="27"><a class="no_click" href="/discover/movie?with_genres=27">Horror</a></li>
            
            <li data-value="10402"><a class="no_click" href="/discover/movie?with_genres=10402">Music</a></li>
            
            <li data-value="9648"><a class="no_click" href="/discover/movie?with_genres=9648">Mystery</a></li>
            
            <li data-value="10749"><a class="no_click" href="/discover/movie?with_genres=10749">Romance</a></li>
            
            <li data-value="878"><a class="no_click" href="/discover/movie?with_genres=878">Science Fiction</a></li>
            
            <li data-value="10770"><a class="no_click" href="/discover/movie?with_genres=10770">TV Movie</a></li>
            
            <li data-value="53"><a class="no_click" href="/discover/movie?with_genres=53">Thriller</a></li>
            
            <li data-value="10752"><a class="no_click" href="/discover/movie?with_genres=10752">War</a></li>
            
            <li data-value="37"><a class="no_click" href="/discover/movie?with_genres=37">Western</a></li>
            
        </ul>
        </div>

        <div class="filter">
        <h3>Certification</h3>
        <ul id="certification" class="multi_select text" name="certification[]">
            
        </ul>
        </div>

        

        <div class="filter">
        <h3>Language <span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#language_tooltip" data-role="tooltip"></span></h3>
        <span title="" class="k-widget k-dropdown full_width font_size_1" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="language_listbox" aria-live="polite" aria-disabled="false" aria-busy="false" aria-activedescendant="6dfd9857-fc91-4ef3-9a35-12dd45a4c3fa" style=""><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input">

    None Selected

    </span><span unselectable="on" class="k-select" aria-label="select"><span class="k-icon k-i-arrow-60-down"></span></span></span><select id="language" name="language" class="full_width font_size_1" data-role="dropdownlist" style="display: none;"><option value="" selected="selected">None Selected</option><option value="en">English</option><option value="de">German</option><option value="fr">French</option><option value="es">Spanish; Castilian</option><option value="ja">Japanese</option><option value="pt">Portuguese</option><option value="it">Italian</option><option value="ru">Russian</option><option value="zh">Chinese</option><option value="ko">Korean</option><option value="nl">Dutch; Flemish</option><option value="sv">Swedish</option><option value="hi">Hindi</option><option value="cs">Czech</option><option value="tr">Turkish</option><option value="cn">Cantonese</option><option value="da">Danish</option><option value="ar">Arabic</option><option value="el">Greek</option><option value="ta">Tamil</option><option value="pl">Polish</option><option value="ml">Malayalam</option><option value="id">Indonesian</option><option value="hu">Hungarian</option><option value="tl">Tagalog</option><option value="fi">Finnish</option><option value="fa">Persian</option><option value="no">Norwegian</option><option value="xx">No Language</option><option value="te">Telugu</option><option value="sr">Serbian</option><option value="th">Thai</option><option value="he">Hebrew</option><option value="ro">Romanian</option><option value="hr">Croatian</option><option value="bn">Bengali</option><option value="vi">Vietnamese</option><option value="ms">Malay</option><option value="sl">Slovenian</option><option value="kn">Kannada</option><option value="bg">Bulgarian</option><option value="sk">Slovak</option><option value="et">Estonian</option><option value="uk">Ukrainian</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="mr">Marathi</option><option value="sq">Albanian</option><option value="ka">Georgian</option><option value="pa">Panjabi; Punjabi</option><option value="ca">Catalan; Valencian</option><option value="ur">Urdu</option><option value="az">Azerbaijani</option><option value="bs">Bosnian</option><option value="is">Icelandic</option><option value="mk">Macedonian</option><option value="af">Afrikaans</option><option value="eu">Basque</option><option value="ab">Abkhazian</option><option value="nb">Bokmål, Norwegian; Norwegian Bokmål</option><option value="hy">Armenian</option><option value="si">Sinhala; Sinhalese</option><option value="gl">Galician</option><option value="as">Assamese</option><option value="ne">Nepali</option><option value="ku">Kurdish</option><option value="gu">Gujarati</option><option value="kk">Kazakh</option><option value="mn">Mongolian</option><option value="sh">Serbo-Croatian</option><option value="zu">Zulu</option><option value="bo">Tibetan</option><option value="am">Amharic</option><option value="be">Belarusian</option><option value="my">Burmese</option><option value="sw">Swahili</option><option value="ky">Kirghiz; Kyrgyz</option><option value="km">Central Khmer</option><option value="uz">Uzbek</option><option value="lb">Luxembourgish; Letzeburgesch</option><option value="jv">Javanese</option><option value="ga">Irish</option><option value="la">Latin</option><option value="ps">Pushto; Pashto</option><option value="se">Northern Sami</option><option value="mt">Maltese</option><option value="gd">Gaelic; Scottish Gaelic</option><option value="iu">Inuktitut</option><option value="lo">Lao</option><option value="wo">Wolof</option><option value="tg">Tajik</option><option value="bm">Bambara</option><option value="ht">Haitian; Haitian Creole</option><option value="cy">Welsh</option><option value="fo">Faroese</option><option value="qu">Quechua</option><option value="yi">Yiddish</option><option value="or">Oriya</option><option value="dv">Divehi; Dhivehi; Maldivian</option><option value="eo">Esperanto</option><option value="nn">Norwegian Nynorsk; Nynorsk, Norwegian</option><option value="dz">Dzongkha</option><option value="hz">Herero</option><option value="mg">Malagasy</option><option value="so">Somali</option><option value="mi">Maori</option><option value="cr">Cree</option><option value="mo">Moldavian; Moldovan</option><option value="sm">Samoan</option><option value="ha">Hausa</option><option value="mh">Marshallese</option><option value="gn">Guarani</option><option value="xh">Xhosa</option><option value="ak">Akan</option><option value="tk">Turkmen</option><option value="ln">Lingala</option><option value="rw">Kinyarwanda</option><option value="sa">Sanskrit</option><option value="ba">Bashkir</option><option value="ce">Chechen</option><option value="ti">Tigrinya</option><option value="ie">Interlingue; Occidental</option><option value="fy">Western Frisian</option><option value="kl">Kalaallisut; Greenlandic</option><option value="ig">Igbo</option><option value="ay">Aymara</option><option value="bi">Bislama</option><option value="za">Zhuang; Chuang</option><option value="st">Sotho, Southern</option><option value="sn">Shona</option><option value="ks">Kashmiri</option><option value="yo">Yoruba</option><option value="ug">Uighur; Uyghur</option><option value="oc">Occitan (post 1500)</option><option value="av">Avaric</option><option value="an">Aragonese</option><option value="su">Sundanese</option><option value="ny">Chichewa; Chewa; Nyanja</option><option value="co">Corsican</option><option value="to">Tonga (Tonga Islands)</option><option value="rm">Romansh</option><option value="aa">Afar</option><option value="ff">Fulah</option><option value="sg">Sango</option><option value="os">Ossetian; Ossetic</option><option value="ty">Tahitian</option><option value="gv">Manx</option><option value="ch">Chamorro</option><option value="oj">Ojibwa</option><option value="ts">Tsonga</option><option value="kw">Cornish</option><option value="pi">Pali</option><option value="ho">Hiri Motu</option><option value="lg">Ganda</option><option value="ss">Swati</option><option value="sd">Sindhi</option><option value="ik">Inupiaq</option><option value="tt">Tatar</option><option value="ii">Sichuan Yi; Nuosu</option><option value="kg">Kongo</option></select></span>
        </div>

        <div class="filter">
        <h3>User Score</h3>
        <div id="user_score_range" class="full_width range">
            <input id="vote_average_gte" name="vote_average.gte" value="0">
            <input id="vote_average_lte" name="vote_average.lte" value="10">
        </div>
        </div>

        <div class="filter">
        <h3>Minimum User Votes</h3>
        <div id="user_vote_range" class="full_width range">
            <input value="0">
            <input value="250">
        </div>
        </div>

        <div class="filter">
        <h3>Runtime</h3>
        <div id="runtime_range" class="full_width range">
            <input id="with_runtime_gte" name="with_runtime.gte" value="0">
            <input id="with_runtime_lte" name="with_runtime.lte" value="400">
        </div>
        </div>

        <div class="filter">
        <h3>Keywords</h3>
        <div class="k-widget k-multiselect full_width font_size_1 k-multiselect-clearable" unselectable="on" title="" style=""><div class="k-multiselect-wrap k-floatwrap" role="listbox" unselectable="on"><ul unselectable="on" class="k-reset" id="with_keywords_taglist"></ul><input class="k-input k-readonly" style="width: 169.063px;" accesskey="" autocomplete="off" role="listbox" title="" aria-expanded="false" aria-haspopup="listbox" aria-autocomplete="list" tabindex="0" aria-describedby="with_keywords_taglist" aria-disabled="false"><span unselectable="on" class="k-icon k-clear-value k-i-close k-hidden" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading k-hidden"></span><span style="font-family: &quot;Source Sans Pro&quot;, Arial, sans-serif; font-size: 14.4px; font-stretch: 100%; font-style: normal; font-weight: 400; letter-spacing: normal; text-transform: none; line-height: 21.6px; position: absolute; visibility: hidden; top: -3333px; left: -3333px;">Filter by keywords...</span></div><select id="with_keywords" name="with_keywords[]" multiple="multiple" class="full_width font_size_1" data-role="multiselect" aria-disabled="false" style="display: none;">
            
        </select></div>
        </div>

    </div>

    <div class="filter_panel card closed">
        <div class="name">
        <h2>Where To Watch</h2>
        <span class="glyphicons_v2 chevron-right"></span>
        </div>

        <div class="filter">
        <h3>My Services <span class="tooltip glyphicons_v2 circle-question" data-tooltip-id="#ott_tooltip" data-role="tooltip"></span></h3>
        <label class="k-form-field">
            <input id="my_services" class="k-checkbox" type="checkbox" name="my_services" value="true" disabled="">
            <label for="my_services" class="k-checkbox-label">Restrict searches to my subscribed services?</label>
        </label>
        </div>

        <div class="filter">
        <h3>Country</h3>
        <span title="" class="k-widget k-dropdown font_size_1 kendo_dropdown" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="ott_region_listbox" aria-live="polite" aria-disabled="false" aria-busy="false" aria-activedescendant="aa7f43dc-bcd4-41d2-8ce9-2709bda3f420" style="width: 100%;"><span unselectable="on" class="k-dropdown-wrap k-state-default"><span unselectable="on" class="k-input"><span class="dropdown_flag" style="background-image: url('https://www.themoviedb.org/assets/2/flags_v2/48/MX-6e1feed2ded1b9d724497ba082957828cffe11b6cbe53c9914f837b5fd7d914e.png')"></span><span>Mexico</span></span><span unselectable="on" class="k-select" aria-label="select"><span class="k-icon k-i-arrow-60-down"></span></span></span><div id="ott_region" class="font_size_1 kendo_dropdown" style="width: 100%; display: none;" data-role="dropdownlist"></div></span>

        <span id="ott_provider_wrapper">
            <ul id="ott_providers" class="ott_providers multi_select image" style="margin-bottom: 0;">

    <li data-value="8" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Netflix">
    <img src="https://images.justwatch.com/icon/430997/s100" width="50" height="50" alt="Netflix">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="119" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Amazon Prime Video">
    <img src="https://images.justwatch.com/icon/52449861/s100" width="50" height="50" alt="Amazon Prime Video">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="167" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Claro video">
    <img src="https://images.justwatch.com/icon/9899714/s100" width="50" height="50" alt="Claro video">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="2" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Apple iTunes">
    <img src="https://images.justwatch.com/icon/190848813/s100" width="50" height="50" alt="Apple iTunes">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="3" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Google Play Movies">
    <img src="https://images.justwatch.com/icon/169478387/s100" width="50" height="50" alt="Google Play Movies">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="66" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Filmin Latino">
    <img src="https://images.justwatch.com/icon/816701/s100" width="50" height="50" alt="Filmin Latino">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="11" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Mubi">
    <img src="https://images.justwatch.com/icon/164970114/s100" width="50" height="50" alt="Mubi">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="100" class="" data-role="tooltip">
    <a class="no_click" href="#" title="GuideDoc">
    <img src="https://images.justwatch.com/icon/2625277/s100" width="50" height="50" alt="GuideDoc">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="228" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Fox Premium">
    <img src="https://images.justwatch.com/icon/92161259/s100" width="50" height="50" alt="Fox Premium">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="188" class="" data-role="tooltip">
    <a class="no_click" href="#" title="YouTube Premium">
    <img src="https://images.justwatch.com/icon/70189310/s100" width="50" height="50" alt="YouTube Premium">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="350" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Apple TV Plus">
    <img src="https://images.justwatch.com/icon/152862153/s100" width="50" height="50" alt="Apple TV Plus">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="67" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Blim">
    <img src="https://images.justwatch.com/icon/818949/s100" width="50" height="50" alt="Blim">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="339" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Movistar Play">
    <img src="https://images.justwatch.com/icon/148114378/s100" width="50" height="50" alt="Movistar Play">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="68" class="" data-role="tooltip">
    <a class="no_click" href="#" title="Microsoft Store">
    <img src="https://images.justwatch.com/icon/820542/s100" width="50" height="50" alt="Microsoft Store">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li data-value="31" class="" data-role="tooltip">
    <a class="no_click" href="#" title="HBO Go">
    <img src="https://images.justwatch.com/icon/614494/s100" width="50" height="50" alt="HBO Go">
    <div><span class="glyphicons_v2 check white"></span></div>
    </a>
    </li>

    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    <li class="hidden" data-role="tooltip"></li>
    </ul>
        </span>
        </div>
    </div>

    <div id="" class="apply small background_color light_blue disabled">
        <div class="loading_wrapper hide">
        <div class="ball-scale-multiple white loader">
            <div></div>
            <div></div>
            <div></div>
        </div>
        </div>
        <p class="load_more"><a class="no_click load_more" data-next-page="2" data-current-page="1" data-partial="" href="">Search</a></p>
    </div>
    
    </form>
</div>