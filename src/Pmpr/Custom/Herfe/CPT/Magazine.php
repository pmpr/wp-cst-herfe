<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a386d39c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Herfe\Page\LatestMagazine; use Pmpr\Custom\Herfe\Setting; use WP_Query; class Magazine extends Common { const egaucecauycwocai = 'issue_number'; const uecoocasykucckuu = 'related_product'; const kaieokkoqukgmsea = 'article_category'; const kckuisacmmuqmcys = 'article_categories'; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->wiskakymeaywyeuw(true)->muuwuqssqkaieqge(__('Magazines', PR__CST__HERFE))->guiaswksukmgageq(__('Magazine', PR__CST__HERFE))->yioesawwewqaigow('dashicons-book'); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('pre_get_posts', [$this, 'weycgicyseuygewy'], 999999)->qcsmikeggeemccuu('pre_post_update', [$this, 'qgoyqwugcigmgywo'], 0, 2); $this->iqkqummseggmikgo('ajax_get_magazines', [$this, 'ogawqwmkwgmwmiyk']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse('loop_shop_per_page', [$this, 'ccwksgoicseegiwe'], 999)->cecaguuoecmccuse('post_thumbnail_html', [$this, 'aokqegmygwwqakuy'], 999, 5); $this->aqaqisyssqeomwom("get_current_{$ymqmyyeuycgmigyo}", [$this, 'isygyemoaqwauqoc'])->aqaqisyssqeomwom("{$ymqmyyeuycgmigyo}_archive_browser_items", [$this, 'iwwawcwwmyoiiasg'])->aqaqisyssqeomwom("can_show_sidebar_{$ymqmyyeuycgmigyo}_list", [$this, 'qyykeaoyqsogsoee']); parent::kgquecmsgcouyaya(); } public function qyykeaoyqsogsoee($ekcswiguywieeeoc) { $ucicuwcaawugkseg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ssquqcoamwkkkcca); if ($ucicuwcaawugkseg && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(Constants::MEDIUM, $ucicuwcaawugkseg) && $this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { $ekcswiguywieeeoc = false; } return $ekcswiguywieeeoc; } public function aokqegmygwwqakuy($uickqscmwgggsmgy, $gcqseksiskwueksc, $saqqouasaaiakeei, $oiegiwogmwmawkeo, $wwgucssaecqekuek) { $ucicuwcaawugkseg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::ssquqcoamwkkkcca); $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($ucicuwcaawugkseg && $oiegiwogmwmawkeo !== 'small' && $mumyimcwkaemyyue->qmssqeyayicowkgy(Constants::MEDIUM, $ucicuwcaawugkseg) && $useksmwkuswkwcqg === $wgkqagumoowawogg->gueasuouwqysmomu($gcqseksiskwueksc) && $mumyimcwkaemyyue->kgkwyuuwwyoskcsq() && ($wgkasieyusucgeuu = $wgkqagumoowawogg->igawqaomowicuayw(self::uecoocasykucckuu, $gcqseksiskwueksc))) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); if ($this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->smyaggwyeweiqiie($ucicuwcaawugkseg, Constants::MEDIUM, $gcqseksiskwueksc) && ($wgkasieyusucgeuu = $usmsssmiougymckk->get($wgkasieyusucgeuu))) { $gusiksiwgcuueucc = $usmsssmiougymckk->qaeeusqkgwagwaqc($wgkasieyusucgeuu, $oiegiwogmwmawkeo, $wwgucssaecqekuek, false); if ($gusiksiwgcuueucc) { $uickqscmwgggsmgy = $gusiksiwgcuueucc; } } } return $uickqscmwgggsmgy; } public function iwwawcwwmyoiiasg() : array { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::MEDIUM, [Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::gqiasegggowomgie => Constants::qiyqwyiiwykeccmo]); $oammesyieqmwuwyi[] = [Constants::qescuiwgsyuikume => $this->ocksiywmkyaqseou('magazine_tab_text', __('Description', PR__CST__HERFE)), Constants::eqewsqmqmsiocaeg => $this->migkyseymeomymmy(), Constants::sauwwsocmukoaayu => $this->caokeucsksukesyo()->gscioiumssogceuc()->myagyqumwekameww($this->miwqiiqeegeqcwis())]; return $oammesyieqmwuwyi; } public function ccwksgoicseegiwe($weyoqgcesqgeusiu) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { $youqwiyugsiuksaa = $this->wwoauyccyygeysoi(); if ($youqwiyugsiuksaa > 0) { $weyoqgcesqgeusiu = $youqwiyugsiuksaa; } } return $weyoqgcesqgeusiu; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq[Constants::imywcsggckkcywgk] = $this->kyuocaymgciaeiac(); $yyimiwcuegayoskq[Constants::goqgcigmiawyauai] = $this->kasoumcmomkcwwyg(); return parent::cgqyqiisuckyyues($yyimiwcuegayoskq); } public function ogawqwmkwgmwmiyk() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $keccaugmemegoimu = [Constants::gsqoooskigukokks => '', Constants::eoskkkieowogacws => '']; $occymigcemkqucuw = false; $iowyegiumsyoskym = $this->iyssgoiwgwygeacg([], [Constants::kkcqmwgccaygggcu => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kkcqmwgccaygggcu, 1), Constants::goqgcigmiawyauai => $this->kasoumcmomkcwwyg()]); $uamcoiueqaamsqma = ''; if ($iowyegiumsyoskym) { $keccaugmemegoimu[Constants::gsqoooskigukokks] = $this->iuygowkemiiwqmiw('list', ['magazines' => $iowyegiumsyoskym, 'is_items_active' => !$eiicaiwgqkgsekce->yyqgamuwwakgciey('is_computer'), 'current_magazine' => $eiicaiwgqkgsekce->yyqgamuwwakgciey('current')]); $occymigcemkqucuw = true; } else { $uamcoiueqaamsqma = __('List is empty.', PR__CST__HERFE); } if ($uamcoiueqaamsqma) { $keccaugmemegoimu[Constants::eoskkkieowogacws] = $uamcoiueqaamsqma; } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function isygyemoaqwauqoc($iqukmgwwwsaimcic = null) { if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { $iowyegiumsyoskym = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), [Constants::cuoyscoiacswuauq => [Constants::ascagqcquwgmygkm => self::kckuisacmmuqmcys, Constants::ciyoccqkiamemcmm => '"' . $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu() . '"', Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui], Constants::goqgcigmiawyauai => 1]); if ($iowyegiumsyoskym) { $iqukmgwwwsaimcic = array_pop($iowyegiumsyoskym); } } else { if (LatestMagazine::symcgieuakksimmu()->sgeaogakoscmysgc()) { $iowyegiumsyoskym = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($this->miwqiiqeegeqcwis(), [Constants::goqgcigmiawyauai => 1]); if ($iowyegiumsyoskym) { $iqukmgwwwsaimcic = array_pop($iowyegiumsyoskym); } } else { if ($this->cukiusasccucgwqc()) { $iqukmgwwwsaimcic = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get(); } } } return $iqukmgwwwsaimcic; } public function qgoyqwugcigmgywo($gcqseksiskwueksc, $wqqwgmoemsyoyyqm) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if ($useksmwkuswkwcqg === $wqqwgmoemsyoyyqm[Constants::uouymeyqasaeckso] && !wp_is_post_revision($gcqseksiskwueksc) && Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::zacqcgggigsqgaog)) { $uamcoiueqaamsqma = ''; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($qsgiagkukecwacuw = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::egaucecauycwocai)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($qkqmqiaowwwokiyy = $seumokooiykcomco->qgisekcaywsmigga($useksmwkuswkwcqg, self::egaucecauycwocai, $qsgiagkukecwacuw)) { foreach ($qkqmqiaowwwokiyy as $umqocuoykawuqooe) { $ayqusicsssqogeue = $seumokooiykcomco->iooowgsqoyqseyuu($umqocuoykawuqooe); if ($ayqusicsssqogeue !== $gcqseksiskwueksc) { $uamcoiueqaamsqma = sprintf(__('Issue number %s already used for %s, please use another number.', PR__CST__HERFE), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($qsgiagkukecwacuw), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($umqocuoykawuqooe), $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->yyykkcyiksewsoqy($umqocuoykawuqooe))); break; } } } } if (!$uamcoiueqaamsqma) { if ($eyscsimwcyaqakqg = $eiicaiwgqkgsekce->ayueggmoqeeukqmq(self::kckuisacmmuqmcys)) { } } if ($uamcoiueqaamsqma) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, $uamcoiueqaamsqma, "{$useksmwkuswkwcqg}-avoid-duplicate-data"); $_POST[self::egaucecauycwocai] = 0; } } } public function weycgicyseuygewy($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && ($this->miwqiiqeegeqcwis() === $gqgemcmoicmgaqie->get(Constants::uouymeyqasaeckso) || !empty($gqgemcmoicmgaqie->get(Constants::MEDIUM)))) { $oyiyuuoguwwaksaa = $gqgemcmoicmgaqie->get(Constants::cuoyscoiacswuauq, []); $oyiyuuoguwwaksaa[] = [[Constants::ygyiacciqgemekwc => Constants::ieiyckasqmcyekim, [Constants::ascagqcquwgmygkm => self::egaucecauycwocai, Constants::ykemsyouoqyoaysg => 'NOT EXISTS'], [Constants::ascagqcquwgmygkm => self::egaucecauycwocai, Constants::ykemsyouoqyoaysg => 'EXISTS']]]; $ywmkwiwkosakssii = [Constants::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, Constants::gqiasegggowomgie => Constants::weyywqiacasssaww]; if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { $ywmkwiwkosakssii[Constants::osocaqqumyuooqyo] = self::egaucecauycwocai; if ((int) $gqgemcmoicmgaqie->get(Constants::goqgcigmiawyauai) !== 1) { $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = $this->kasoumcmomkcwwyg(); } } $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->skckwsgymkimyuwo()->ccwowuakmqoemoem($gqgemcmoicmgaqie, $ywmkwiwkosakssii); } return $gqgemcmoicmgaqie; } public function kyuocaymgciaeiac(int $ggauoeuaesiymgee = 1) { $aecgggeoymywyumm = "{$this->miwqiiqeegeqcwis()}_paged"; if ($this->migkyseymeomymmy()) { unset($_COOKIE[$aecgggeoymywyumm]); setcookie($aecgggeoymywyumm, null, -1, '/'); $suaemuyiacqyugsm = 1; } else { $suaemuyiacqyugsm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw($aecgggeoymywyumm, $ggauoeuaesiymgee); } return max(1, $suaemuyiacqyugsm); } private function kasoumcmomkcwwyg() { $omkysikckkcieckq = Setting::uicsuiemgoemyyiy; if ($this->caokeucsksukesyo()->giiecckwoyiawoyy()->amkiaqeamgywsygm()) { $omkysikckkcieckq = Setting::waaeqwcsiqscmmwk; } return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq($omkysikckkcieckq, $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()); } private function wwoauyccyygeysoi() { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::igiamoucisomkakk, $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg()); } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $icwicymcioeyeyek = parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $icwicymcioeyeyek['empty_message'] = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::ykqccqwygascksig, sprintf(__('There are currently no products in this %s', PR__CST__HERFE), __('Magazine', PR__CST__HERFE))); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($eyscsimwcyaqakqg = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::kckuisacmmuqmcys, [])) { $cugkqwowaymmquoy = []; if ($mumyimcwkaemyyue->qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { $icwicymcioeyeyek[Constants::kmqmeaywmyiqqkqw] = $seumokooiykcomco->ekwkywuguceaogsk(); $icwicymcioeyeyek['empty_message'] = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::amymakiacyaqskyu, sprintf(__('There are currently no products in this %s', PR__CST__HERFE), __('Article Category', PR__CST__HERFE))); } else { $qawuqcsueakkgiio = max(1, $mumyimcwkaemyyue->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $seauiwyeoycowegg = $aoskwucuugeuaeus->kucyssqeaqscgssq($eyscsimwcyaqakqg, [Constants::kkcqmwgccaygggcu => $qawuqcsueakkgiio, Constants::goqgcigmiawyauai => $this->wwoauyccyygeysoi()]); $yiwksawussyksyom = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::kmqmeaywmyiqqkqw, []); if ($yiwksawussyksyom) { $ekiuyucoiagmscgy = function ($icsywsyukqcciiky) use($yiwksawussyksyom) { global $wpdb; $oysoyeaucuawyaky = implode(',', $yiwksawussyksyom); $icsywsyukqcciiky .= sprintf(" OR %s.ID IN (%s)", $wpdb->posts, $oysoyeaucuawyaky); return $icsywsyukqcciiky; }; $this->cecaguuoecmccuse('posts_where', $ekiuyucoiagmscgy); } $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(Constants::oguseymmyyoyaako, $seauiwyeoycowegg); $oksqskmgoqiqciis = $wpQuery->get_posts(); if (isset($ekiuyucoiagmscgy)) { $this->ggmgmqswqkgecosg('posts_where', $ekiuyucoiagmscgy); } $icwicymcioeyeyek[Constants::kmqmeaywmyiqqkqw] = $oksqskmgoqiqciis; $cugkqwowaymmquoy = [Constants::uiiqiokqwmccomiu => $wpQuery->max_num_pages, Constants::asmooogmgyecqqka => $qawuqcsueakkgiio]; } $icwicymcioeyeyek['pagination_args'] = $cugkqwowaymmquoy; $eyscsimwcyaqakqg = $aoskwucuugeuaeus->ciugwooasaqcywas(self::kaieokkoqukgmsea, [Constants::ackcaikowcokggsc => $eyscsimwcyaqakqg, Constants::gqiasegggowomgie => Constants::weyywqiacasssaww, Constants::osocaqqumyuooqyo => 'render_priority']); if ($eyscsimwcyaqakqg) { array_unshift($eyscsimwcyaqakqg, [Constants::qescuiwgsyuikume => __('All', PR__CST__HERFE), Constants::eqewsqmqmsiocaeg => !$mumyimcwkaemyyue->qmssqeyayicowkgy(self::kaieokkoqukgmsea), Constants::sauwwsocmukoaayu => $seumokooiykcomco->ycqquoiyyuesegsy($this->isygyemoaqwauqoc())]); } $icwicymcioeyeyek[self::kckuisacmmuqmcys] = $eyscsimwcyaqakqg; } $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $wgkasieyusucgeuu = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, self::uecoocasykucckuu); if ($wgkasieyusucgeuu && ($product = $usmsssmiougymckk->get($wgkasieyusucgeuu))) { $icwicymcioeyeyek[self::uecoocasykucckuu] = [Constants::qescuiwgsyuikume => __('Buy a Printed Copy', PR__CST__HERFE), Constants::iccwcygaeqmomooo => $usmsssmiougymckk->eksssooaeasoymyi($product), Constants::sauwwsocmukoaayu => $usmsssmiougymckk->ycqquoiyyuesegsy($product)]; } return $icwicymcioeyeyek; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { if (!isset($ywmkwiwkosakssii[Constants::kkcqmwgccaygggcu])) { $ywmkwiwkosakssii[Constants::kkcqmwgccaygggcu] = $this->kyuocaymgciaeiac(); } $ywmkwiwkosakssii[Constants::gikuasuikwemyqoq] = Constants::wmmucsiyiyusmssm; return parent::iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $ywmkwiwkosakssii); } public function aqygoeiikwkmkyke() : array { return [self::egaucecauycwocai => __('Issue Number', PR__CST__HERFE), Constants::MEDIUM => __('Medium', PR__CST__HERFE), self::uecoocasykucckuu => __('Related Product', PR__CST__HERFE), Constants::kmqmeaywmyiqqkqw => __('Products', PR__CST__HERFE), self::kckuisacmmuqmcys => __('Article Categories', PR__CST__HERFE)]; } public function yiaammmogmaisoka($qgoqiacsiccwoawi, $gcqseksiskwueksc) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); switch ($qgoqiacsiccwoawi) { case self::uecoocasykucckuu: if ($product = $seumokooiykcomco->igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc)) { echo $omwieegygisoswgw->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($product), $wgkqagumoowawogg->yyykkcyiksewsoqy($product)); } break; case self::egaucecauycwocai: echo $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($seumokooiykcomco->igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc)); break; case Constants::MEDIUM: $eyscsimwcyaqakqg = $seumokooiykcomco->weescwwgqgiyumyw($gcqseksiskwueksc, Constants::MEDIUM); echo $omwieegygisoswgw->qmqccwwiawucockc($eyscsimwcyaqakqg, [Constants::squoamkioomemiyi => Constants::gmmygyiecgmggaam, Constants::qescuiwgsyuikume => __('Mediums', PR__CST__HERFE)]); break; case self::kckuisacmmuqmcys: $eyscsimwcyaqakqg = $seumokooiykcomco->igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc); echo $omwieegygisoswgw->qmqccwwiawucockc($eyscsimwcyaqakqg, [Constants::squoamkioomemiyi => Constants::gmmygyiecgmggaam, Constants::qescuiwgsyuikume => __('Article Categories', PR__CST__HERFE)]); break; case Constants::kmqmeaywmyiqqkqw: $oksqskmgoqiqciis = $seumokooiykcomco->igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc); echo $omwieegygisoswgw->qmqccwwiawucockc($oksqskmgoqiqciis, [Constants::squoamkioomemiyi => Constants::uouymeyqasaeckso, Constants::qescuiwgsyuikume => __('Products', PR__CST__HERFE)]); break; } } public function qyecwywaoyamkmci() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->sikqggwmmykuiymy($gosmywauqawmcyga->scyscgskcwukckyy($ymqmyyeuycgmigyo . '_metadata')->gswweykyogmsyawy(__('Magazine Metadata', PR__CST__HERFE))->saemoowcasogykak(IconInterface::uimgcyyaugqcacea)->qqqycgoaysysgiqm()->mkksewyosgeumwsa($gosmywauqawmcyga->ymuegqgyuagyucws(self::egaucecauycwocai)->gswweykyogmsyawy(__('Issue Number', PR__CST__HERFE))->escqqisecooswqgo()->eumecwmqmukqgyea()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($gosmywauqawmcyga->mccagaqeagiikkec(Constants::uecoocasykucckuu)->gswweykyogmsyawy(sprintf(__('Physical Medium (%s)', PR__CST__HERFE), __('Product', PR__CST__HERFE)))->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($gosmywauqawmcyga->mccagaqeagiikkec(self::kckuisacmmuqmcys)->gswweykyogmsyawy(__('Article Categories', PR__CST__HERFE))->oikgogcweiiaocka()->ikimooaieasgmeak(self::kaieokkoqukgmsea))->mkksewyosgeumwsa($gosmywauqawmcyga->mccagaqeagiikkec(Constants::kmqmeaywmyiqqkqw)->gswweykyogmsyawy(sprintf(__('This Issue Articles (%s)', PR__CST__HERFE), __('Product', PR__CST__HERFE)))->oikgogcweiiaocka()->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))); } }
