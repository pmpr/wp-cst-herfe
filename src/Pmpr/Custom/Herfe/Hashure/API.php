<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c7b6d24ec0e             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; use WP_Error; class API extends BaseClass { const meuwgemwasqmoywm = "\150\141\x73\150\165\x72\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\x6f\153\145\x6e"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\160\x72\x6f\x66\x69\x6c\x65" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\150\x74\x74\160\163\72\x2f\57\x61\x70\151\56\x68\141\x73\x68\x75\x72\x65\x2e\143\157\155\x2f\141\x70\x69\57\x76\x31\57"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->ueakuaywsqiooygo(15)->kiaqywwoysssqgig("\141\143\143\145\160\x74\x2d\x6c\141\x6e\147\x75\x61\147\x65", "\x66\x61"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto iwsuawwqomaowuii; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto wagqgeqymeqoeuyi; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x61\x75\x74\150\x2f\154\x6f\x67\151\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto msemumccgceyugmg; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\x74\x6f\153\x65\x6e"); if (!$mgegoogckgsumooq) { goto eogwckcymuugikuy; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); eogwckcymuugikuy: msemumccgceyugmg: wagqgeqymeqoeuyi: if (!$mgegoogckgsumooq) { goto qoqskyuuwueqkquk; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; qoqskyuuwueqkquk: iwsuawwqomaowuii: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto wcugqegqsuuuwqao; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\x61\x75\164\150\57\154\x6f\x67\157\x75\164"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); wcugqegqsuuuwqao: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) { $icwicymcioeyeyek = ["\x61\143\164\151\166\145\x5f\x66\x72\x6f\x6d" => $mcmcymukmqioukkk, "\x61\143\x74\x69\166\145\x5f\164\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto mqicocmqegwukkwg; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); mqicocmqegwukkwg: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\x59\x2d\155\x2d\x64\x20\110\72\x69", $ocogsiouoiuuguym); ciykoyeioqgyaeqo: } asiqwuoswmigcaki: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\x41\103\x54\111\126\105\x5f\122\105\123\105\114\114\x45\122\x5f\123\125\x42\123\103\122\x49\x50\124\x49\117\x4e", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto kkumywowcoycymeo; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto wyuemgggaqogsmsq; } if (!$this->kkmkcysyceyiwskq()) { goto samwkqgwouggsguc; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\162\145\x73\x65\154\x6c\x65\162\163\x2f\x75\x73\x65\162\163\x2f\x72\145\x67\151\163\164\145\x72", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto acsqgiuageaasiyy; } $this->saqqeqmcyyoeqici("\110\x61\163\150\x75\x72\145\x20\x75\x73\145\162\163\40\x6c\x6f\147\x69\x6e\x20\145\162\162\x6f\162\x3a\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto oomguqikqokqwgku; acsqgiuageaasiyy: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\163\145\x72\x5f\x70\x72\157\146\x69\x6c\x65\56\151\x64"))) { goto emmsycooskoqmgeg; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto qgeugwymkkiacwoc; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); qgeugwymkkiacwoc: emmsycooskoqmgeg: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto ouamogymawucwswu; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto ouamogymawucwswu; } mugqyyeayeyggqqk: ouamogymawucwswu: oomguqikqokqwgku: samwkqgwouggsguc: goto guykyqecgswcsmws; wyuemgggaqogsmsq: $icwicymcioeyeyek = $aokagokqyuysuksm; guykyqecgswcsmws: kkumywowcoycymeo: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto kqqiegkuqagcqsya; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\162\x65\x73\x65\x6c\x6c\x65\x72\163\x2f\x6d\x61\x6b\x65\x2d\157\x72\144\x65\162", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto miweggwqeiaeweia; } $iueymcwwscwqkiyq = strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); $sogksuscggsicmac = self::ckcawaoawwioqecq === $iueymcwwscwqkiyq || "\163\165\143\x63\145\163" === $iueymcwwscwqkiyq; miweggwqeiaeweia: kqqiegkuqagcqsya: return $sogksuscggsicmac; } }
