<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638b36f36a32d             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\CPT; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Custom\Herfe\Page\LatestMagazine; use Pmpr\Custom\Herfe\Setting; use WP_Query; class Magazine extends Common { const kmqmeaywmyiqqkqw = "\160\162\x6f\144\x75\x63\x74\x73"; const egaucecauycwocai = "\151\x73\x73\x75\145\137\156\x75\155\142\145\162"; const uecoocasykucckuu = "\162\145\x6c\141\x74\x65\144\x5f\x70\x72\x6f\144\x75\x63\164"; const kckuisacmmuqmcys = "\x61\x72\164\151\x63\154\145\x5f\143\x61\x74\x65\x67\x6f\162\151\145\x73"; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->wiskakymeaywyeuw(true)->muuwuqssqkaieqge(__("\115\x61\147\141\x7a\151\156\x65\163", PR__CST__HERFE))->guiaswksukmgageq(__("\x4d\141\x67\141\172\151\x6e\145", PR__CST__HERFE))->yioesawwewqaigow(IconFontawesomeInterface::qkowewmsmcqamaiu); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\160\x72\x65\x5f\x67\145\164\137\x70\157\163\x74\163", [$this, "\x77\145\171\x63\x67\151\143\x79\x73\145\x75\x79\x67\145\x77\171"])->iqkqummseggmikgo("\x61\152\141\170\137\147\x65\x74\137\x6d\x61\x67\141\x7a\x69\156\145\x73", [$this, "\157\x67\x61\167\161\x77\x6d\153\167\147\155\x77\x6d\x69\171\x6b"])->qcsmikeggeemccuu("\160\162\x65\x5f\x70\x6f\163\164\x5f\x75\160\144\x61\164\145", [$this, "\161\147\157\x79\x71\167\165\x67\x63\151\x67\x6d\147\x79\167\x6f"], 0, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->cecaguuoecmccuse("\x6c\157\157\x70\x5f\163\150\x6f\160\137\x70\145\x72\137\160\x61\147\x65", [$this, "\143\x63\167\153\x73\147\157\151\143\163\x65\x65\147\x69\167\145"], 999)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\147\x65\x74\137\143\x75\162\162\145\x6e\x74\x5f{$ymqmyyeuycgmigyo}"), [$this, "\x69\163\x79\x67\x79\145\x6d\157\141\x71\x77\x61\165\161\157\x63"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$ymqmyyeuycgmigyo}\x5f\x61\x72\x63\150\x69\166\145\137\x62\x72\157\x77\x73\x65\x72\137\151\x74\145\155\x73"), [$this, "\151\167\x77\x61\167\143\x77\x77\155\171\157\x69\x69\141\163\x67"])->cecaguuoecmccuse("\x70\157\163\x74\x5f\164\x68\165\x6d\x62\156\141\x69\x6c\x5f\x68\164\x6d\154", [$this, "\141\x6f\x6b\161\145\147\155\171\147\167\x77\x71\x61\153\x75\x79"], 999, 5); parent::kgquecmsgcouyaya(); } public function aokqegmygwwqakuy($uickqscmwgggsmgy, $gcqseksiskwueksc, $saqqouasaaiakeei, $oiegiwogmwmawkeo, $wwgucssaecqekuek) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $ucicuwcaawugkseg = Setting::eiwcuqigayigimak(Setting::ssquqcoamwkkkcca); if (!($ucicuwcaawugkseg && $oiegiwogmwmawkeo !== "\x73\x6d\x61\154\154" && DecoratorQuery::qmssqeyayicowkgy(self::MEDIUM, $ucicuwcaawugkseg) && $useksmwkuswkwcqg === ManipulatePost::gueasuouwqysmomu($gcqseksiskwueksc) && DecoratorQuery::kgkwyuuwwyoskcsq() && ($wgkasieyusucgeuu = ManipulatePost::igawqaomowicuayw(self::uecoocasykucckuu, $gcqseksiskwueksc)))) { goto uukumskkeggaowck; } if (!(DecoratorPost::smyaggwyeweiqiie($ucicuwcaawugkseg, self::MEDIUM, $gcqseksiskwueksc) && ($wgkasieyusucgeuu = ManipulateWoocommerce::aqasygcsqysmmyke($wgkasieyusucgeuu)))) { goto eequksumcoogyoem; } $gusiksiwgcuueucc = $wgkasieyusucgeuu->get_image($oiegiwogmwmawkeo, $wwgucssaecqekuek, false); if (!$gusiksiwgcuueucc) { goto sqiciiuwmykocycc; } $uickqscmwgggsmgy = $gusiksiwgcuueucc; sqiciiuwmykocycc: eequksumcoogyoem: uukumskkeggaowck: return $uickqscmwgggsmgy; } public function iwwawcwwmyoiiasg() : array { $oammesyieqmwuwyi = ManipulateTerm::ciugwooasaqcywas(self::MEDIUM, [self::awkcoioakcaougmq => self::omaksceqmigeaoko, self::gqiasegggowomgie => self::qiyqwyiiwykeccmo]); $oammesyieqmwuwyi[] = [self::qescuiwgsyuikume => Setting::eiwcuqigayigimak(Setting::emywackguiiqcwkk, __("\x44\x65\163\x63\162\151\160\164\x69\157\156", PR__CST__HERFE)), self::eqewsqmqmsiocaeg => $this->migkyseymeomymmy(), self::sauwwsocmukoaayu => ManipulatePost::mqgeysameoesmuqw($this->miwqiiqeegeqcwis())]; return $oammesyieqmwuwyi; } public function ccwksgoicseegiwe($weyoqgcesqgeusiu) { if (!DecoratorQuery::qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { goto ocokwuuquaokmasc; } $youqwiyugsiuksaa = $this->wwoauyccyygeysoi(); if (!($youqwiyugsiuksaa > 0)) { goto cggowoquuiwqkyew; } $weyoqgcesqgeusiu = $youqwiyugsiuksaa; cggowoquuiwqkyew: ocokwuuquaokmasc: return $weyoqgcesqgeusiu; } public function cgqyqiisuckyyues(array $yyimiwcuegayoskq) : array { $yyimiwcuegayoskq[self::imywcsggckkcywgk] = $this->kyuocaymgciaeiac(); $yyimiwcuegayoskq[self::goqgcigmiawyauai] = $this->kasoumcmomkcwwyg(); return parent::cgqyqiisuckyyues($yyimiwcuegayoskq); } public function ogawqwmkwgmwmiyk() { $keccaugmemegoimu = [self::gsqoooskigukokks => '', self::eoskkkieowogacws => '']; $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto meawswgwagoqgkye; } $iowyegiumsyoskym = $this->iyssgoiwgwygeacg([], [self::kkcqmwgccaygggcu => ManipulateServer::ayueggmoqeeukqmq(self::kkcqmwgccaygggcu, 1), self::goqgcigmiawyauai => $this->kasoumcmomkcwwyg()]); if ($iowyegiumsyoskym) { goto yiwiqaqmwiogawym; } $uamcoiueqaamsqma = __("\x4c\x69\x73\x74\40\x69\x73\40\145\155\160\x74\x79\56", PR__CST__HERFE); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $keccaugmemegoimu[self::gsqoooskigukokks] = $this->iuygowkemiiwqmiw("\154\151\x73\164", ["\x6d\x61\x67\x61\172\x69\x6e\x65\163" => $iowyegiumsyoskym, "\143\x75\162\162\145\156\x74\137\x6d\x61\x67\x61\172\151\156\145" => ManipulateServer::ayueggmoqeeukqmq("\x63\165\162\162\x65\x6e\x74")]); $occymigcemkqucuw = true; goacqqsgaaigyuaw: meawswgwagoqgkye: if (!$uamcoiueqaamsqma) { goto wcesymwqykqoyuqk; } $keccaugmemegoimu[self::eoskkkieowogacws] = $uamcoiueqaamsqma; wcesymwqykqoyuqk: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function isygyemoaqwauqoc($iqukmgwwwsaimcic = null) { if (DecoratorQuery::qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { goto qmiwsequckckoaei; } if (LatestMagazine::symcgieuakksimmu()->sgeaogakoscmysgc()) { goto kecwuwwcwokuksyq; } if (!$this->cukiusasccucgwqc()) { goto egasokooagakisiy; } $iqukmgwwwsaimcic = ManipulatePost::get(); egasokooagakisiy: goto qgegkeomwscwwiuw; kecwuwwcwokuksyq: $iowyegiumsyoskym = ManipulatePost::ciugwooasaqcywas($this->miwqiiqeegeqcwis(), [self::goqgcigmiawyauai => 1]); if (!$iowyegiumsyoskym) { goto mswsoaimesegiiic; } $iqukmgwwwsaimcic = array_pop($iowyegiumsyoskym); mswsoaimesegiiic: qgegkeomwscwwiuw: goto goeoymmqqqeeoime; qmiwsequckckoaei: $iowyegiumsyoskym = ManipulatePost::ciugwooasaqcywas($this->miwqiiqeegeqcwis(), [self::cuoyscoiacswuauq => [self::ascagqcquwgmygkm => self::kckuisacmmuqmcys, self::ciyoccqkiamemcmm => "\42" . ManipulateTerm::mwikyscisascoeea() . "\x22", self::ykemsyouoqyoaysg => self::augocsiaqqukkuui], self::goqgcigmiawyauai => 1]); if (!$iowyegiumsyoskym) { goto usqgaogkqgemuima; } $iqukmgwwwsaimcic = array_pop($iowyegiumsyoskym); usqgaogkqgemuima: goeoymmqqqeeoime: return $iqukmgwwwsaimcic; } public function qgoyqwugcigmgywo($gcqseksiskwueksc, $wqqwgmoemsyoyyqm) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); if (!($useksmwkuswkwcqg === $wqqwgmoemsyoyyqm[self::uouymeyqasaeckso] && !wp_is_post_revision($gcqseksiskwueksc) && Setting::eiwcuqigayigimak(Setting::zacqcgggigsqgaog))) { goto mqccmesakuemceqi; } $uamcoiueqaamsqma = ''; if (!($qsgiagkukecwacuw = ManipulateServer::ayueggmoqeeukqmq(self::egaucecauycwocai))) { goto cuoqqgaygogsmmic; } $qkqmqiaowwwokiyy = ManipulatePost::qgisekcaywsmigga($useksmwkuswkwcqg, self::egaucecauycwocai, $qsgiagkukecwacuw); if (!$qkqmqiaowwwokiyy) { goto ygkcacsyyckescqs; } foreach ($qkqmqiaowwwokiyy as $umqocuoykawuqooe) { $ayqusicsssqogeue = ManipulatePost::mwikyscisascoeea($umqocuoykawuqooe); if (!($ayqusicsssqogeue !== $gcqseksiskwueksc)) { goto qmeoaqmsuseueqiy; } $uamcoiueqaamsqma = sprintf(__("\111\x73\163\x75\x65\x20\x6e\x75\x6d\x62\145\x72\40\45\x73\40\x61\x6c\x72\x65\x61\x64\171\40\165\x73\145\x64\40\146\157\x72\40\45\x73\54\40\x70\x6c\x65\141\x73\145\40\165\163\x65\x20\141\x6e\x6f\164\150\x65\x72\x20\156\x75\x6d\142\145\162\x2e", PR__CST__HERFE), $this->msywmyaoqmaegsuy($qsgiagkukecwacuw), ManipulateHTML::yuawgssgauywkiia(ManipulatePost::qcgakseyaikigqco($umqocuoykawuqooe), DecoratorPost::yyykkcyiksewsoqy($umqocuoykawuqooe))); goto eiawsoasmscmqswa; qmeoaqmsuseueqiy: ickcmqoiosquugwe: } eiawsoasmscmqswa: ygkcacsyyckescqs: cuoqqgaygogsmmic: if ($uamcoiueqaamsqma) { goto sukskmcwsoysiuqu; } if (!($eyscsimwcyaqakqg = ManipulateServer::ayueggmoqeeukqmq(self::kckuisacmmuqmcys))) { goto cgewcsueoyaeikgm; } cgewcsueoyaeikgm: sukskmcwsoysiuqu: if (!$uamcoiueqaamsqma) { goto igymseewwyiocoug; } $this->cimaucgayqyyccoc($uamcoiueqaamsqma, "{$useksmwkuswkwcqg}\x2d\x61\166\x6f\151\x64\55\144\x75\160\154\151\143\141\164\x65\x2d\144\x61\164\x61"); $_POST[self::egaucecauycwocai] = 0; igymseewwyiocoug: mqccmesakuemceqi: } public function weycgicyseuygewy($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && ($this->miwqiiqeegeqcwis() === $gqgemcmoicmgaqie->get(self::uouymeyqasaeckso) || !empty($gqgemcmoicmgaqie->get(self::MEDIUM))))) { goto kooskuwkuayiuose; } $ywmkwiwkosakssii = []; if (!(ManipulateAjax::uywcakyieooyscis() || ManipulateQuery::eewqyocggsagyuis())) { goto eyiamcekkgkiawqy; } $ywmkwiwkosakssii = [self::awkcoioakcaougmq => self::omaksceqmigeaoko, self::gqiasegggowomgie => self::iwmgegikocuwggua, self::osocaqqumyuooqyo => self::egaucecauycwocai, self::icqqkokykyqimeia => "\116\x55\x4d\105\122\111\x43"]; eyiamcekkgkiawqy: if (!(!DecoratorQuery::goecwaaykqoaaagg() && (int) $gqgemcmoicmgaqie->get(self::goqgcigmiawyauai) !== 1)) { goto twkmiuomimomscew; } $ywmkwiwkosakssii[self::goqgcigmiawyauai] = $this->kasoumcmomkcwwyg(); twkmiuomimomscew: $gqgemcmoicmgaqie = ManipulateDatabase::ccwowuakmqoemoem($gqgemcmoicmgaqie, $ywmkwiwkosakssii); kooskuwkuayiuose: return $gqgemcmoicmgaqie; } public function kyuocaymgciaeiac(int $ggauoeuaesiymgee = 1) { $aecgggeoymywyumm = "{$this->miwqiiqeegeqcwis()}\x5f\x70\141\147\x65\x64"; if ($this->migkyseymeomymmy()) { goto qwcegcuowwgiccos; } $suaemuyiacqyugsm = $_COOKIE[$aecgggeoymywyumm] ?? $ggauoeuaesiymgee; goto qcessicwuikwqsis; qwcegcuowwgiccos: unset($_COOKIE[$aecgggeoymywyumm]); setcookie($aecgggeoymywyumm, null, -1, "\57"); $suaemuyiacqyugsm = 1; qcessicwuikwqsis: return max(1, $suaemuyiacqyugsm); } private function kasoumcmomkcwwyg() { return Setting::eiwcuqigayigimak(Setting::uicsuiemgoemyyiy, ManipulateSetting::omkaowmygoqwsywq()); } private function wwoauyccyygeysoi() { return Setting::eiwcuqigayigimak(Setting::igiamoucisomkakk, ManipulateSetting::omkaowmygoqwsywq()); } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $icwicymcioeyeyek = parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); $icwicymcioeyeyek["\x65\x6d\x70\164\x79\137\x6d\145\x73\x73\141\147\x65"] = Setting::eiwcuqigayigimak(Setting::ykqccqwygascksig, sprintf(__("\x54\x68\145\x72\x65\x20\x61\162\x65\x20\x63\x75\162\x72\145\x6e\x74\154\x79\x20\156\157\x20\x70\x72\x6f\x64\165\x63\x74\163\40\151\156\x20\x74\x68\x69\x73\40\x25\x73", PR__CST__HERFE), __("\x4d\141\x67\x61\x7a\151\156\145", PR__CST__HERFE))); if (!($eyscsimwcyaqakqg = ManipulateArray::get($icwicymcioeyeyek, self::kckuisacmmuqmcys, []))) { goto ycakugokkqkuqyiu; } $cugkqwowaymmquoy = []; if (DecoratorQuery::qmssqeyayicowkgy(self::kaieokkoqukgmsea)) { goto ieumumsgyguceusy; } $qawuqcsueakkgiio = max(1, DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $seauiwyeoycowegg = ManipulateTerm::kucyssqeaqscgssq($eyscsimwcyaqakqg, [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::goqgcigmiawyauai => $this->wwoauyccyygeysoi()]); $wpQuery = ManipulatePost::owicscwgeuqcqaig(self::oguseymmyyoyaako, $seauiwyeoycowegg); $oksqskmgoqiqciis = $wpQuery->get_posts(); $smyuywgeakgoqawq = ManipulateArray::get($icwicymcioeyeyek, self::kmqmeaywmyiqqkqw, []); if (!($qawuqcsueakkgiio <= 1 && $smyuywgeakgoqawq)) { goto yssscwioiyygssec; } $oksqskmgoqiqciis = array_merge($smyuywgeakgoqawq, $oksqskmgoqiqciis); yssscwioiyygssec: $icwicymcioeyeyek[self::kmqmeaywmyiqqkqw] = $oksqskmgoqiqciis; $cugkqwowaymmquoy = ["\x63\x75\162\x72\x65\x6e\164" => $qawuqcsueakkgiio, "\x74\157\x74\x61\x6c" => $wpQuery->max_num_pages]; goto coywmiyqgsweuiic; ieumumsgyguceusy: $icwicymcioeyeyek["\x65\x6d\x70\x74\171\137\x6d\x65\x73\x73\x61\147\x65"] = Setting::eiwcuqigayigimak(Setting::amymakiacyaqskyu, sprintf(__("\124\x68\145\x72\x65\40\x61\162\x65\x20\x63\x75\x72\x72\145\x6e\164\154\171\x20\156\x6f\x20\160\x72\x6f\144\x75\143\x74\163\40\151\156\x20\x74\x68\151\163\x20\x25\163", PR__CST__HERFE), __("\101\162\x74\x69\143\154\x65\x20\103\141\x74\145\147\x6f\x72\x79", PR__CST__HERFE))); $icwicymcioeyeyek["\x70\x72\157\144\165\143\164\x73"] = ManipulatePost::ekwkywuguceaogsk(); coywmiyqgsweuiic: $icwicymcioeyeyek["\160\x61\147\151\156\x61\x74\151\x6f\156\x5f\141\x72\147\x73"] = $cugkqwowaymmquoy; $iqukmgwwwsaimcic = $this->isygyemoaqwauqoc(); $eyscsimwcyaqakqg = ManipulateTerm::ciugwooasaqcywas(self::kaieokkoqukgmsea, [self::ackcaikowcokggsc => $eyscsimwcyaqakqg, self::gqiasegggowomgie => self::weyywqiacasssaww, self::osocaqqumyuooqyo => "\x72\x65\x6e\144\145\x72\137\x70\x72\151\157\x72\x69\164\x79"]); if (!$eyscsimwcyaqakqg) { goto siqagquguiemuoku; } array_unshift($eyscsimwcyaqakqg, [self::qescuiwgsyuikume => __("\101\154\x6c", PR__CST__HERFE), self::eqewsqmqmsiocaeg => !DecoratorQuery::qmssqeyayicowkgy(self::kaieokkoqukgmsea), self::sauwwsocmukoaayu => ManipulatePost::ycqquoiyyuesegsy($iqukmgwwwsaimcic)]); siqagquguiemuoku: $icwicymcioeyeyek[self::kckuisacmmuqmcys] = $eyscsimwcyaqakqg; ycakugokkqkuqyiu: $wgkasieyusucgeuu = ManipulateArray::get($icwicymcioeyeyek, self::uecoocasykucckuu); if (!($wgkasieyusucgeuu && ($product = ManipulateWoocommerce::aqasygcsqysmmyke($wgkasieyusucgeuu)))) { goto oouoqimaaqcmccay; } $icwicymcioeyeyek[self::uecoocasykucckuu] = [self::qescuiwgsyuikume => __("\102\165\x79\x20\x61\x20\120\x72\151\x6e\164\145\x64\x20\103\x6f\x70\171", PR__CST__HERFE), self::iccwcygaeqmomooo => $product->is_in_stock(), self::sauwwsocmukoaayu => $product->get_permalink()]; oouoqimaaqcmccay: return $icwicymcioeyeyek; } public function iyssgoiwgwygeacg(array $wyoiwuqokyeeuguk, array $ywmkwiwkosakssii = []) : array { if (isset($ywmkwiwkosakssii[self::kkcqmwgccaygggcu])) { goto sycygoiaiqqageym; } $ywmkwiwkosakssii[self::kkcqmwgccaygggcu] = $this->kyuocaymgciaeiac(); sycygoiaiqqageym: $ywmkwiwkosakssii[self::gikuasuikwemyqoq] = self::wmmucsiyiyusmssm; return parent::iyssgoiwgwygeacg($wyoiwuqokyeeuguk, $ywmkwiwkosakssii); } public function aqygoeiikwkmkyke() : array { return [self::egaucecauycwocai => __("\x49\x73\163\165\145\x20\116\x75\155\x62\x65\x72", PR__CST__HERFE), self::MEDIUM => __("\115\145\144\151\x75\x6d", PR__CST__HERFE), self::uecoocasykucckuu => __("\x52\x65\154\x61\164\145\144\40\120\x72\157\144\165\x63\164", PR__CST__HERFE), self::kmqmeaywmyiqqkqw => __("\x50\x72\x6f\144\x75\x63\164\x73", PR__CST__HERFE), self::kckuisacmmuqmcys => __("\x41\x72\164\151\143\154\x65\x20\x43\x61\x74\x65\147\x6f\x72\x69\145\163", PR__CST__HERFE)]; } public function egqkcyeqowwyiamc($qgoqiacsiccwoawi, $gcqseksiskwueksc) { switch ($qgoqiacsiccwoawi) { case self::uecoocasykucckuu: if (!($product = ManipulatePost::igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc))) { goto wwkgkaecgiwggcck; } echo ManipulateHTML::yuawgssgauywkiia(ManipulatePost::qcgakseyaikigqco($product), DecoratorPost::yyykkcyiksewsoqy($product)); wwkgkaecgiwggcck: goto gygawoqywkukmqee; case self::egaucecauycwocai: echo $this->msywmyaoqmaegsuy(ManipulatePost::igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc)); goto gygawoqywkukmqee; case self::MEDIUM: $eyscsimwcyaqakqg = ManipulatePost::weescwwgqgiyumyw($gcqseksiskwueksc, self::MEDIUM); echo ManipulateHTML::qmqccwwiawucockc($eyscsimwcyaqakqg, [self::squoamkioomemiyi => self::gmmygyiecgmggaam, self::qescuiwgsyuikume => __("\x4d\x65\144\151\x75\x6d\163", PR__CST__HERFE)]); goto gygawoqywkukmqee; case self::kckuisacmmuqmcys: $eyscsimwcyaqakqg = ManipulatePost::igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc); echo ManipulateHTML::qmqccwwiawucockc($eyscsimwcyaqakqg, [self::squoamkioomemiyi => self::gmmygyiecgmggaam, self::qescuiwgsyuikume => __("\x41\162\164\151\143\x6c\145\x20\103\x61\x74\145\x67\157\162\x69\x65\163", PR__CST__HERFE)]); goto gygawoqywkukmqee; case self::kmqmeaywmyiqqkqw: $oksqskmgoqiqciis = ManipulatePost::igawqaomowicuayw($qgoqiacsiccwoawi, $gcqseksiskwueksc); echo ManipulateHTML::qmqccwwiawucockc($oksqskmgoqiqciis, [self::squoamkioomemiyi => self::uouymeyqasaeckso, self::qescuiwgsyuikume => __("\x50\162\157\x64\165\x63\x74\163", PR__CST__HERFE)]); goto gygawoqywkukmqee; } kciouyuaqkyqomam: gygawoqywkukmqee: } public function iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig) : array { if (!$this->migkyseymeomymmy()) { goto umgaesggesswoaqe; } $qookweymeqawmcwo["\141\x72\143\150\151\x76\145\x5f\x64\x65\163\x63\162\x69\x70\x74\x69\x6f\156"] = Setting::eiwcuqigayigimak(Setting::ismkokomgksysysu); umgaesggesswoaqe: return parent::iaaksaeagaookesk($qookweymeqawmcwo, $mksyucucyswaukig); } public function qyecwywaoyamkmci() { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->sikqggwmmykuiymy(MetaBox::cgygmuguceeosoey($ymqmyyeuycgmigyo, __("\115\x61\x67\x61\x7a\151\156\x65\40\115\x65\164\141\x64\141\164\141", PR__CST__HERFE), true)->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::egaucecauycwocai, __("\111\x73\163\x75\x65\x20\x4e\165\155\142\145\162", PR__CST__HERFE))->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::uecoocasykucckuu, sprintf(__("\120\x68\171\x73\x69\143\x61\x6c\40\115\145\x64\x69\x75\155\x20\50\45\x73\51", PR__CST__HERFE), __("\x50\162\x6f\144\165\x63\164", PR__CST__HERFE)))->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::kckuisacmmuqmcys, __("\x41\x72\164\x69\x63\x6c\145\40\x43\141\x74\x65\147\157\162\x69\x65\x73", PR__CST__HERFE))->oikgogcweiiaocka()->yyayequseyasoyks()->oeewiaacscgyamai(self::kaieokkoqukgmsea))->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::kmqmeaywmyiqqkqw, sprintf(__("\124\x68\151\163\x20\x49\163\x73\165\145\40\x41\x72\x74\x69\143\x6c\145\163\40\x28\x25\x73\51", PR__CST__HERFE), __("\120\162\x6f\x64\165\x63\x74", PR__CST__HERFE)))->oikgogcweiiaocka()->smmismmuuccmscya()->oeewiaacscgyamai(self::oguseymmyyoyaako))->saemoowcasogykak(IconFontawesomeInterface::isokaoamoeicecmy)->igeseuiwcwwsuesi()); } }
