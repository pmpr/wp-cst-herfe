<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646b0f6e10d0             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\x68\x61\163\150\165\x72\x65\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\157\x6b\x65\156"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\x70\x72\x6f\146\151\x6c\x65" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\150\164\x74\x70\x73\x3a\57\57\141\160\x69\56\150\x61\x73\150\x75\x72\145\56\143\x6f\155\x2f\141\x70\151\57\166\61\x2f"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->ueakuaywsqiooygo(15)->kiaqywwoysssqgig("\x61\x63\x63\x65\x70\164\55\154\x61\x6e\x67\165\x61\x67\145", "\146\141"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto kwagwqyusyiyoaqs; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto sciwggaeogcoesiu; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\141\x75\x74\150\57\154\157\x67\x69\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto mkwskuycuyguqqok; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\164\x6f\153\x65\156"); if (!$mgegoogckgsumooq) { goto kuicqywysciceggs; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); kuicqywysciceggs: mkwskuycuyguqqok: sciwggaeogcoesiu: if (!$mgegoogckgsumooq) { goto eqkauqciwewmgeoi; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; eqkauqciwewmgeoi: kwagwqyusyiyoaqs: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto yowsmsiyimmimemc; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\x2f\x61\x75\x74\150\57\x6c\157\x67\x6f\165\164"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); yowsmsiyimmimemc: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\141\143\x74\151\x76\x65\x5f\146\x72\157\x6d" => $mcmcymukmqioukkk, "\x61\x63\164\151\166\x65\x5f\164\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto sqiciiuwmykocycc; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); sqiciiuwmykocycc: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\x59\x2d\155\x2d\144\40\x48\x3a\151", $ocogsiouoiuuguym); iomcaiwewsawiamu: } kiqogmwcgcamwiig: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\101\103\124\111\x56\105\x5f\x52\x45\x53\105\114\114\105\122\137\123\125\x42\123\103\122\x49\120\x54\111\x4f\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto mswsoaimesegiiic; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto wcesymwqykqoyuqk; } if (!$this->kkmkcysyceyiwskq()) { goto meawswgwagoqgkye; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\162\x65\x73\145\x6c\x6c\145\162\x73\x2f\165\163\145\x72\163\57\162\145\x67\x69\x73\164\145\162", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto yiwiqaqmwiogawym; } $this->saqqeqmcyyoeqici("\x48\x61\163\x68\x75\x72\145\40\x75\163\x65\x72\x73\40\154\x6f\x67\x69\x6e\40\145\162\162\157\162\72\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\163\x65\x72\x5f\160\162\x6f\146\151\154\145\x2e\x69\x64"))) { goto uukumskkeggaowck; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto eequksumcoogyoem; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); eequksumcoogyoem: uukumskkeggaowck: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto cggowoquuiwqkyew; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto cggowoquuiwqkyew; } ocokwuuquaokmasc: cggowoquuiwqkyew: goacqqsgaaigyuaw: meawswgwagoqgkye: goto usqgaogkqgemuima; wcesymwqykqoyuqk: $icwicymcioeyeyek = $aokagokqyuysuksm; usqgaogkqgemuima: mswsoaimesegiiic: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto kecwuwwcwokuksyq; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\x72\145\163\x65\x6c\x6c\145\162\163\x2f\x6d\x61\x6b\145\x2d\x6f\x72\x64\145\x72", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto egasokooagakisiy; } $sogksuscggsicmac = self::ckcawaoawwioqecq === strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); egasokooagakisiy: kecwuwwcwokuksyq: return $sogksuscggsicmac; } }
