<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400a8d7dc5             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; use WP_Error; class API extends BaseClass { const meuwgemwasqmoywm = "\150\x61\163\150\x75\x72\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\x6f\153\145\x6e"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\x70\x72\x6f\x66\x69\154\145" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\x68\164\x74\160\x73\72\57\x2f\x61\x70\x69\x2e\x68\x61\x73\x68\165\x72\x65\x2e\x63\x6f\155\57\141\160\x69\57\x76\61\x2f"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->ueakuaywsqiooygo(15)->kiaqywwoysssqgig("\x61\143\x63\145\x70\164\55\154\141\x6e\x67\165\x61\147\x65", "\x66\141"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto eequksumcoogyoem; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto iomcaiwewsawiamu; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\141\165\x74\150\x2f\154\157\147\x69\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto kiqogmwcgcamwiig; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\164\157\153\x65\156"); if (!$mgegoogckgsumooq) { goto yowsmsiyimmimemc; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); yowsmsiyimmimemc: kiqogmwcgcamwiig: iomcaiwewsawiamu: if (!$mgegoogckgsumooq) { goto sqiciiuwmykocycc; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; sqiciiuwmykocycc: eequksumcoogyoem: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\x61\165\164\150\x2f\154\x6f\147\x6f\x75\x74"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); uukumskkeggaowck: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) { $icwicymcioeyeyek = ["\x61\x63\x74\151\166\x65\x5f\146\x72\x6f\155" => $mcmcymukmqioukkk, "\x61\x63\164\x69\166\145\x5f\x74\x6f" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto yiwiqaqmwiogawym; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); yiwiqaqmwiogawym: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\x59\55\155\x2d\144\40\110\72\x69", $ocogsiouoiuuguym); ocokwuuquaokmasc: } cggowoquuiwqkyew: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\101\x43\124\111\x56\105\x5f\x52\x45\x53\x45\x4c\114\105\x52\x5f\123\125\x42\x53\x43\122\x49\120\124\x49\117\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto goeoymmqqqeeoime; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto qgegkeomwscwwiuw; } if (!$this->kkmkcysyceyiwskq()) { goto kecwuwwcwokuksyq; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\162\x65\x73\x65\x6c\154\x65\162\x73\x2f\165\x73\x65\x72\163\x2f\162\x65\147\151\163\x74\145\162", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto mswsoaimesegiiic; } $this->saqqeqmcyyoeqici("\x48\141\x73\150\x75\162\145\40\x75\x73\x65\162\163\40\154\x6f\x67\151\x6e\40\x65\x72\162\157\162\72\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto egasokooagakisiy; mswsoaimesegiiic: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\x73\145\x72\137\160\x72\x6f\x66\151\154\x65\56\x69\x64"))) { goto meawswgwagoqgkye; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto goacqqsgaaigyuaw; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); goacqqsgaaigyuaw: meawswgwagoqgkye: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto wcesymwqykqoyuqk; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto wcesymwqykqoyuqk; } usqgaogkqgemuima: wcesymwqykqoyuqk: egasokooagakisiy: kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: $icwicymcioeyeyek = $aokagokqyuysuksm; qmiwsequckckoaei: goeoymmqqqeeoime: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto ickcmqoiosquugwe; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\162\x65\163\x65\x6c\x6c\x65\162\163\x2f\155\x61\x6b\x65\x2d\157\162\144\145\162", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto eiawsoasmscmqswa; } $iueymcwwscwqkiyq = strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); $sogksuscggsicmac = self::ckcawaoawwioqecq === $iueymcwwscwqkiyq || "\163\165\x63\x63\x65\163" === $iueymcwwscwqkiyq; eiawsoasmscmqswa: ickcmqoiosquugwe: return $sogksuscggsicmac; } }
