<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6469148dc7950             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\x68\141\x73\x68\165\162\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\x6f\153\145\156"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\160\x72\157\x66\151\154\145" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\x68\164\x74\160\163\x3a\x2f\57\x61\160\x69\x2e\x68\x61\163\150\x75\162\145\56\143\x6f\x6d\x2f\141\160\x69\57\166\61\57"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->kiaqywwoysssqgig("\141\143\143\x65\160\164\55\154\141\x6e\147\x75\x61\x67\x65", "\x66\x61"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto qmiwsequckckoaei; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto kecwuwwcwokuksyq; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\141\x75\164\x68\x2f\x6c\x6f\147\151\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto egasokooagakisiy; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\x74\157\153\x65\x6e"); if (!$mgegoogckgsumooq) { goto mswsoaimesegiiic; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); mswsoaimesegiiic: egasokooagakisiy: kecwuwwcwokuksyq: if (!$mgegoogckgsumooq) { goto qgegkeomwscwwiuw; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; qgegkeomwscwwiuw: qmiwsequckckoaei: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto goeoymmqqqeeoime; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\141\165\x74\150\57\154\157\x67\x6f\165\164"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); goeoymmqqqeeoime: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\x61\143\164\x69\x76\145\x5f\146\x72\157\x6d" => $mcmcymukmqioukkk, "\141\x63\x74\151\x76\x65\137\164\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto qmeoaqmsuseueqiy; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); qmeoaqmsuseueqiy: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\131\x2d\155\55\x64\x20\x48\x3a\151", $ocogsiouoiuuguym); ickcmqoiosquugwe: } eiawsoasmscmqswa: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\101\103\x54\x49\126\x45\137\122\x45\123\105\114\114\105\122\137\123\125\x42\123\x43\x52\111\x50\x54\111\117\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto qwcegcuowwgiccos; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto twkmiuomimomscew; } if (!$this->kkmkcysyceyiwskq()) { goto eyiamcekkgkiawqy; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\162\145\163\145\154\x6c\145\162\x73\x2f\x75\x73\145\162\x73\57\162\145\147\151\x73\x74\x65\162", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto igymseewwyiocoug; } $this->saqqeqmcyyoeqici("\110\141\x73\x68\x75\x72\x65\x20\165\163\x65\x72\x73\40\154\157\147\151\156\x20\x65\162\162\x6f\x72\72\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto mqccmesakuemceqi; igymseewwyiocoug: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\x73\x65\x72\137\160\x72\157\146\x69\x6c\145\x2e\151\144"))) { goto cuoqqgaygogsmmic; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto ygkcacsyyckescqs; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); ygkcacsyyckescqs: cuoqqgaygogsmmic: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto cgewcsueoyaeikgm; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto cgewcsueoyaeikgm; } sukskmcwsoysiuqu: cgewcsueoyaeikgm: mqccmesakuemceqi: eyiamcekkgkiawqy: goto kooskuwkuayiuose; twkmiuomimomscew: $icwicymcioeyeyek = $aokagokqyuysuksm; kooskuwkuayiuose: qwcegcuowwgiccos: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto yssscwioiyygssec; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\x65\x73\145\154\154\x65\162\163\x2f\x6d\x61\x6b\x65\x2d\157\162\x64\x65\162", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto qcessicwuikwqsis; } $sogksuscggsicmac = self::ckcawaoawwioqecq === strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); qcessicwuikwqsis: yssscwioiyygssec: return $sogksuscggsicmac; } }
