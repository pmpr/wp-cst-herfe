<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             657852da7877b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Custom\Herfe\Container; abstract class Common extends Container { const kmagyyokkyyyqqay = "\160\154\x61\171"; const waqeayycosiamskm = "\x6d\x6f\166\x69\145"; const uwuwcacyyakgoqsu = "\x68\x74\164\x70\163\x3a\x2f\57\150\x61\163\x68\165\162\145\x2e\143\157\155\x2f"; protected ?API $api = null; public function auamgqiwisysomsa() : API { if ($this->api) { goto acsqgiuageaasiyy; } $this->api = API::symcgieuakksimmu(); acsqgiuageaasiyy: return $this->api; } public function yauqeuqwioeoqcou($product, $mkucggyaiaukqoce, string $ccamueccusigaaio = self::waqeayycosiamskm) : string { if (in_array($ccamueccusigaaio, [self::kmagyyokkyyyqqay, self::waqeayycosiamskm])) { goto oomguqikqokqwgku; } $ccamueccusigaaio = self::kmagyyokkyyyqqay; oomguqikqokqwgku: $eeamcawaiqocomwy = $mgegoogckgsumooq = ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $umkkkaqkwugkemce = $seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $product); if (!($umkkkaqkwugkemce && is_numeric($umkkkaqkwugkemce))) { goto guykyqecgswcsmws; } if (!($mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce))) { goto samwkqgwouggsguc; } $mgegoogckgsumooq = $this->auamgqiwisysomsa()->yswgycwoywsmywyu($mkucggyaiaukqoce); samwkqgwouggsguc: if (!$mgegoogckgsumooq) { goto wyuemgggaqogsmsq; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x75\163\151\x6e\x67\137\164\x6f\153\x65\156", $mgegoogckgsumooq, trailingslashit(self::uwuwcacyyakgoqsu . $ccamueccusigaaio) . $umkkkaqkwugkemce); wyuemgggaqogsmsq: guykyqecgswcsmws: return $eeamcawaiqocomwy; } public function ysuoseskooqusqua() : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x73\165\x62\x73\143\162\x69\x70\164\151\x6f\156\x5f\143\x68\x65\143\x6b\x5f\x61\143\143\145\163\x73", self::oimusiegakqgwosg, $this->caokeucsksukesyo()->issssuygyewuaswa()->get(), ["\x72\x75\154\145\137\x74\x79\160\x65" => "\141\143\x63\145\163\x73", "\141\143\x63\145\x73\163\x5f\x74\x79\160\x65" => self::cqycgsyykemiygou]); if (!(self::oimusiegakqgwosg === $sogksuscggsicmac)) { goto kkumywowcoycymeo; } $sogksuscggsicmac = false; kkumywowcoycymeo: return $sogksuscggsicmac; } public function qmoswyyemykyycko($product) : bool { $weksiguqgqscsoee = false; if (!($umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product))) { goto kqqiegkuqagcqsya; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iueymcwwscwqkiyq = $seumokooiykcomco->igawqaomowicuayw(self::uuseyckuwmiouskw, $umkkkaqkwugkemce); if (!(self::yyigwaqioecwemiw === $iueymcwwscwqkiyq)) { goto miweggwqeiaeweia; } $weksiguqgqscsoee = !empty($seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $umkkkaqkwugkemce)); miweggwqeiaeweia: kqqiegkuqagcqsya: return $weksiguqgqscsoee; } }
