<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6576e9187065f             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\x68\141\163\x68\x75\x72\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\157\x6b\145\156"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\160\x72\157\x66\x69\154\145" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\150\164\164\x70\163\x3a\57\57\141\x70\151\56\x68\x61\163\x68\165\162\x65\56\x63\x6f\155\57\x61\x70\x69\x2f\x76\x31\57"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->kiaqywwoysssqgig("\141\143\x63\145\x70\164\55\154\141\156\147\165\141\147\x65", "\x66\x61"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto ykomgumacooyomsk; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto awoaooyoeoyeeqee; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x61\165\164\x68\x2f\154\x6f\147\151\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto cwwmimggaaecmucw; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\164\x6f\x6b\145\x6e"); if (!$mgegoogckgsumooq) { goto aomysykcgikegiau; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); aomysykcgikegiau: cwwmimggaaecmucw: awoaooyoeoyeeqee: if (!$mgegoogckgsumooq) { goto ogqmesokykywseys; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; ogqmesokykywseys: ykomgumacooyomsk: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto mqkmcysgoiaouiwm; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\141\x75\x74\x68\x2f\154\157\147\157\165\x74"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); mqkmcysgoiaouiwm: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\x61\143\x74\151\x76\145\137\146\x72\x6f\x6d" => $mcmcymukmqioukkk, "\x61\143\x74\151\x76\145\137\x74\x6f" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto iikiiioqiyegyaak; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); iikiiioqiyegyaak: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\x59\x2d\x6d\x2d\x64\x20\x48\x3a\151", $ocogsiouoiuuguym); gicyayswqyuoekcq: } kosaqwikueyksqmw: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\x41\103\124\x49\126\x45\137\122\105\x53\105\x4c\114\105\122\x5f\123\x55\x42\x53\x43\x52\111\x50\x54\x49\117\x4e", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto ugqwuugsweqgmywk; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto cogywoqcqummsyus; } if (!$this->kkmkcysyceyiwskq()) { goto eekcoeikaeaaeyii; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\162\x65\163\145\154\154\x65\x72\x73\x2f\165\x73\145\162\x73\x2f\162\x65\x67\x69\163\x74\145\x72", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto csammceowmqwaamq; } $this->saqqeqmcyyoeqici("\110\x61\x73\x68\165\162\145\x20\x75\x73\x65\162\163\40\x6c\x6f\147\x69\x6e\40\145\x72\162\157\x72\x3a\40{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto ocaguquugeamqckq; csammceowmqwaamq: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\163\x65\162\137\160\162\157\x66\x69\154\145\56\151\144"))) { goto cuumeogeomowqisc; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto uiosisocuwokwkie; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); uiosisocuwokwkie: cuumeogeomowqisc: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto gcckqucukawcasgk; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto gcckqucukawcasgk; } qmkaeeomgkwggoyo: gcckqucukawcasgk: ocaguquugeamqckq: eekcoeikaeaaeyii: goto gmwykkouysyaqwqm; cogywoqcqummsyus: $icwicymcioeyeyek = $aokagokqyuysuksm; gmwykkouysyaqwqm: ugqwuugsweqgmywk: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto sockeswygwcskeuq; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\145\x73\x65\x6c\x6c\145\x72\x73\x2f\x6d\141\x6b\x65\55\157\162\x64\145\x72", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto uaukmuiwskcemcsw; } $sogksuscggsicmac = self::ckcawaoawwioqecq === strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); uaukmuiwskcemcsw: sockeswygwcskeuq: return $sogksuscggsicmac; } }
