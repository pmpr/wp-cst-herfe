<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646b9b5de1df             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\150\141\x73\150\x75\162\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\164\x6f\153\145\x6e"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\160\162\x6f\x66\151\x6c\145" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\150\x74\x74\x70\x73\x3a\57\57\141\160\151\x2e\x68\x61\163\150\165\x72\145\x2e\x63\157\x6d\57\x61\x70\x69\x2f\x76\61\57"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->ueakuaywsqiooygo(15)->kiaqywwoysssqgig("\x61\x63\143\x65\x70\164\x2d\x6c\x61\156\147\165\141\147\x65", "\x66\141"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto kwagwqyusyiyoaqs; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto sciwggaeogcoesiu; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\x61\165\x74\150\x2f\154\x6f\147\x69\x6e", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto mkwskuycuyguqqok; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\x74\x6f\x6b\x65\156"); if (!$mgegoogckgsumooq) { goto kuicqywysciceggs; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: if (!$mgegoogckgsumooq) { goto eqkauqciwewmgeoi; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; eqkauqciwewmgeoi: kwagwqyusyiyoaqs: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto yowsmsiyimmimemc; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x61\x75\164\150\57\154\x6f\147\157\165\x74"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); yowsmsiyimmimemc: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\x61\x63\164\x69\x76\x65\x5f\146\x72\x6f\x6d" => $mcmcymukmqioukkk, "\141\x63\164\151\x76\x65\x5f\x74\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto sqiciiuwmykocycc; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); sqiciiuwmykocycc: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\131\x2d\x6d\x2d\x64\40\x48\72\x69", $ocogsiouoiuuguym); iomcaiwewsawiamu: } kiqogmwcgcamwiig: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\101\x43\x54\x49\x56\105\137\122\x45\x53\105\x4c\114\x45\122\x5f\123\x55\x42\x53\x43\x52\x49\120\x54\111\117\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto mswsoaimesegiiic; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto wcesymwqykqoyuqk; } if (!$this->kkmkcysyceyiwskq()) { goto meawswgwagoqgkye; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\x65\x73\x65\x6c\154\x65\162\163\57\165\x73\145\x72\x73\57\162\x65\147\151\x73\164\x65\x72", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto yiwiqaqmwiogawym; } $this->saqqeqmcyyoeqici("\110\141\163\x68\165\x72\x65\x20\165\163\145\162\163\40\x6c\x6f\x67\x69\156\x20\x65\162\162\x6f\x72\72\40{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\x75\x73\x65\x72\x5f\x70\162\157\x66\151\154\x65\x2e\151\x64"))) { goto uukumskkeggaowck; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto eequksumcoogyoem; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); eequksumcoogyoem: uukumskkeggaowck: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto cggowoquuiwqkyew; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto cggowoquuiwqkyew; } ocokwuuquaokmasc: cggowoquuiwqkyew: goacqqsgaaigyuaw: meawswgwagoqgkye: goto usqgaogkqgemuima; wcesymwqykqoyuqk: $icwicymcioeyeyek = $aokagokqyuysuksm; usqgaogkqgemuima: mswsoaimesegiiic: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto kecwuwwcwokuksyq; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\x65\163\x65\154\x6c\145\162\163\57\x6d\x61\153\x65\x2d\157\162\144\x65\x72", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto egasokooagakisiy; } $iueymcwwscwqkiyq = strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); $sogksuscggsicmac = self::ckcawaoawwioqecq === $iueymcwwscwqkiyq || "\163\x75\143\143\145\x73" === $iueymcwwscwqkiyq; egasokooagakisiy: kecwuwwcwokuksyq: return $sogksuscggsicmac; } }
