<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e50fc016755             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Custom\Herfe\Setting; class API extends BaseClass { const meuwgemwasqmoywm = "\150\141\163\150\165\162\145\137"; const ocmeosyysmwauoic = self::meuwgemwasqmoywm . "\x74\x6f\x6b\x65\156"; const sgcqaacigawukgyc = self::meuwgemwasqmoywm . "\160\x72\x6f\x66\151\x6c\145" . self::mswocgcucqoaesaa; public function __construct() { $this->domain = "\x68\164\164\160\163\72\x2f\x2f\141\x70\151\56\x68\141\x73\x68\x75\162\x65\56\143\x6f\x6d\57\141\160\x69\x2f\166\x31\x2f"; $this->settingObj = Setting::symcgieuakksimmu(); $this->iwoewaiwqaisaagy()->kiaqywwoysssqgig("\141\143\x63\145\160\x74\55\x6c\141\x6e\147\165\x61\x67\145", "\x66\141"); parent::__construct(); } protected function sygeeqgwywmygsyu() { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->get(self::ocmeosyysmwauoic, false); } public function kkmkcysyceyiwskq() : bool { $wsaagkegqiukasqc = false; $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); if (!($yewiaiaauukwsgku && $qqwegysogaocgeww)) { goto syuaummumssgwwee; } $mgegoogckgsumooq = $this->sygeeqgwywmygsyu(); if ($mgegoogckgsumooq) { goto sguskaeaaqcagqgc; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\141\x75\164\x68\57\x6c\157\x67\x69\156", [self::qmwqkaeamecekiso => [self::akywgoyaseymiyka => $qqwegysogaocgeww, self::eykamcciguyuegmi => $yewiaiaauukwsgku]], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto yuuyikiacmmueosu; } $mgegoogckgsumooq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, "\x74\157\x6b\145\156"); if (!$mgegoogckgsumooq) { goto ucuoeymyqeokgsya; } $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->add(self::ocmeosyysmwauoic, $mgegoogckgsumooq); ucuoeymyqeokgsya: yuuyikiacmmueosu: sguskaeaaqcagqgc: if (!$mgegoogckgsumooq) { goto agkmiayuawacakau; } $this->amskqmemsacmksye($mgegoogckgsumooq); $wsaagkegqiukasqc = true; agkmiayuawacakau: syuaummumssgwwee: return $wsaagkegqiukasqc; } public function aiamgkiewwakoegy() { if (!$this->kkmkcysyceyiwskq()) { goto oocuemosmeeekgas; } $keccaugmemegoimu = $this->sqmuqsscmimwqoki("\57\x61\165\164\150\x2f\x6c\157\x67\x6f\x75\164"); $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->delete(self::ocmeosyysmwauoic); oocuemosmeeekgas: } public function subscribe($mkucggyaiaukqoce, $mcmcymukmqioukkk, $acuayeeoiwokyomo) : bool { $icwicymcioeyeyek = ["\x61\143\164\x69\x76\145\x5f\x66\x72\x6f\155" => $mcmcymukmqioukkk, "\x61\x63\164\x69\166\145\x5f\164\157" => $acuayeeoiwokyomo]; foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $ocogsiouoiuuguym) { if (is_numeric($ocogsiouoiuuguym)) { goto egsycocugqyyswsi; } $ocogsiouoiuuguym = strtotime($ocogsiouoiuuguym); egsycocugqyyswsi: $icwicymcioeyeyek[$uusmaiomayssaecw] = date("\x59\55\x6d\x2d\x64\x20\110\x3a\x69", $ocogsiouoiuuguym); uoeasoimegouymka: } qkcsykuocwuyaice: return $this->wgwsagyqmescywes($mkucggyaiaukqoce, "\101\x43\x54\111\x56\105\x5f\x52\x45\x53\105\114\x4c\x45\x52\x5f\123\x55\x42\x53\x43\x52\111\x50\124\111\x4f\116", $icwicymcioeyeyek); } public function yswgycwoywsmywyu($mkucggyaiaukqoce, string $aiowsaccomcoikus = self::sygmkaeayiiouiwm) : ?string { $icwicymcioeyeyek = null; $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce, true); if (!($mkucggyaiaukqoce && $this->kkmkcysyceyiwskq())) { goto sqmoqymckwsogsqg; } if (self::gouqcwikiiygyasc === $aiowsaccomcoikus && ($aokagokqyuysuksm = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc, $mkucggyaiaukqoce))) { goto oyiuemaaykgkqqam; } if (!$this->kkmkcysyceyiwskq()) { goto ussceseaimqywuiy; } $sogksuscggsicmac = $this->eqkieiagqmugguew("\57\x72\145\x73\145\x6c\x6c\145\162\163\x2f\165\x73\145\162\x73\57\162\x65\x67\x69\x73\x74\x65\x72", [self::qmwqkaeamecekiso => [self::eykamcciguyuegmi => $mkucggyaiaukqoce->user_email, self::kagqiwogmiguosiw => $mkucggyaiaukqoce->first_name ?: $mkucggyaiaukqoce->display_name, self::scagkwwiiquocimc => $mkucggyaiaukqoce->last_name ?: $mkucggyaiaukqoce->display_name]], self::mswoacegomcucaik, false); if (!is_wp_error($sogksuscggsicmac)) { goto cgmgqucewwssmicq; } $this->saqqeqmcyyoeqici("\110\141\163\x68\x75\x72\x65\40\x75\x73\x65\x72\x73\x20\154\x6f\x67\x69\x6e\x20\x65\162\x72\157\x72\72\x20{$this->gcsweumukyckmgik($sogksuscggsicmac)}"); goto mkomygccqkmkumsi; cgmgqucewwssmicq: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!($yikqyiaooimoaaug = $gkyciwoiiisgywcs->qamwegcyimgcqksw($sogksuscggsicmac, "\165\163\x65\162\137\x70\x72\157\146\x69\x6c\x65\x2e\x69\x64"))) { goto aoquoewagkseayug; } $gkkcokamsycqmkqi = $yoiguusocukqeayg->igawqaomowicuayw(self::sgcqaacigawukgyc); if (!(!$gkkcokamsycqmkqi || $gkkcokamsycqmkqi !== $yikqyiaooimoaaug)) { goto qiaimmucomukkeka; } $yoiguusocukqeayg->ksmqawcowkmegigw(self::sgcqaacigawukgyc, $yikqyiaooimoaaug, $mkucggyaiaukqoce); qiaimmucomukkeka: aoquoewagkseayug: switch ($aiowsaccomcoikus) { case self::sygmkaeayiiouiwm: $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::sygmkaeayiiouiwm); goto osuscoaaomwcqkew; case self::gouqcwikiiygyasc: $icwicymcioeyeyek = $yikqyiaooimoaaug; goto osuscoaaomwcqkew; } ciucewqgyoiouesq: osuscoaaomwcqkew: mkomygccqkmkumsi: ussceseaimqywuiy: goto gqmewagyagamokok; oyiuemaaykgkqqam: $icwicymcioeyeyek = $aokagokqyuysuksm; gqmewagyagamokok: sqmoqymckwsogsqg: return $icwicymcioeyeyek; } protected function wgwsagyqmescywes($mkucggyaiaukqoce, string $sqeykgyoooqysmca, array $icwicymcioeyeyek = []) : bool { $sogksuscggsicmac = false; if (!($this->kkmkcysyceyiwskq() && ($ycoeoaakqyskgykq = $this->yswgycwoywsmywyu($mkucggyaiaukqoce, self::gouqcwikiiygyasc)))) { goto ceiwqkyquikcemmo; } $icwicymcioeyeyek[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $icwicymcioeyeyek[self::yauicucwkgqyygas] = $ycoeoaakqyskgykq; $sogksuscggsicmac = $this->eqkieiagqmugguew("\x2f\x72\145\163\x65\154\154\x65\x72\x73\x2f\x6d\x61\x6b\x65\x2d\157\162\x64\x65\162", [self::qmwqkaeamecekiso => $icwicymcioeyeyek], self::mswoacegomcucaik, false); if (is_wp_error($sogksuscggsicmac)) { goto uycesqqkoeamocgm; } $sogksuscggsicmac = self::ckcawaoawwioqecq === strtolower($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, self::ciywsqoeiymemsys, '')); uycesqqkoeamocgm: ceiwqkyquikcemmo: return $sogksuscggsicmac; } }
