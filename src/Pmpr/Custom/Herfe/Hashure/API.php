<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             658026cdc66e6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\150\x61\163\150\165\x72\x65\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\164\157\153\x65\x6e"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\x70\x72\x6f\146\x69\x6c\x65" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\x68\164\x74\x70\163\72\57\57\x61\x70\151\56\150\141\x73\x68\x75\162\x65\56\143\x6f\155\x2f\x61\160\x69\57\x76\61\x2f"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->kiaqywwoysssqgig("\141\x63\x63\145\x70\164\55\x6c\x61\x6e\147\165\141\x67\145", "\146\x61"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto eequksumcoogyoem; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto iomcaiwewsawiamu; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\x61\x75\164\x68\57\x6c\x6f\147\x69\x6e", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto kiqogmwcgcamwiig; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\164\157\x6b\x65\156"); if (!$mgegoogckgsumooq) { goto yowsmsiyimmimemc; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); yowsmsiyimmimemc: kiqogmwcgcamwiig: iomcaiwewsawiamu: if (!$mgegoogckgsumooq) { goto sqiciiuwmykocycc; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; sqiciiuwmykocycc: eequksumcoogyoem: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x61\x75\x74\x68\57\154\x6f\147\157\165\164"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); uukumskkeggaowck: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\x61\x63\164\151\x76\x65\137\146\x72\x6f\x6d" => $mcmcymukmqioukkk, "\141\x63\164\151\166\x65\137\x74\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto yiwiqaqmwiogawym; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); yiwiqaqmwiogawym: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\131\x2d\155\x2d\144\40\110\x3a\151", $ocogsiouoiuuguym); ocokwuuquaokmasc: } cggowoquuiwqkyew: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\x41\x43\124\x49\126\x45\x5f\122\105\x53\105\114\114\105\122\x5f\x53\x55\102\x53\103\x52\111\x50\x54\x49\x4f\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto goeoymmqqqeeoime; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto qgegkeomwscwwiuw; } if (!$this->kkmkcysyceyiwskq()) { goto kecwuwwcwokuksyq; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\x72\x65\x73\145\x6c\x6c\145\162\163\x2f\x75\x73\145\162\x73\57\162\145\x67\x69\163\x74\x65\162", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto mswsoaimesegiiic; } $this->saqqeqmcyyoeqici("\x48\x61\x73\x68\165\162\x65\40\x75\x73\145\162\x73\40\154\157\x67\x69\156\x20\145\x72\162\157\x72\x3a\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto egasokooagakisiy; mswsoaimesegiiic: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\x75\163\145\162\137\x70\162\x6f\x66\x69\x6c\x65\x2e\x69\x64"))) { goto meawswgwagoqgkye; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto goacqqsgaaigyuaw; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); goacqqsgaaigyuaw: meawswgwagoqgkye: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto wcesymwqykqoyuqk; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto wcesymwqykqoyuqk; } usqgaogkqgemuima: wcesymwqykqoyuqk: egasokooagakisiy: kecwuwwcwokuksyq: goto qmiwsequckckoaei; qgegkeomwscwwiuw: $icwicymcioeyeyek = $aokagokqyuysuksm; qmiwsequckckoaei: goeoymmqqqeeoime: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto ickcmqoiosquugwe; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\x65\163\145\x6c\x6c\145\162\x73\57\x6d\x61\x6b\x65\x2d\x6f\x72\144\145\x72", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto eiawsoasmscmqswa; } $sogksuscggsicmac = self::ckcawaoawwioqecq === strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); eiawsoasmscmqswa: ickcmqoiosquugwe: return $sogksuscggsicmac; } }
