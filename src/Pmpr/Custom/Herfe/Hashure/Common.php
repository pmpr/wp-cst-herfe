<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a194df91973             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Custom\Herfe\Container; abstract class Common extends Container { const kmagyyokkyyyqqay = "\160\154\x61\171"; const waqeayycosiamskm = "\x6d\157\x76\151\145"; const uwuwcacyyakgoqsu = "\x68\x74\x74\160\163\72\57\x2f\x68\141\x73\x68\165\162\x65\56\x63\x6f\x6d\57"; protected ?API $api = null; public function auamgqiwisysomsa() : API { if ($this->api) { goto wkeuuycukmuqiaom; } $this->api = API::symcgieuakksimmu(); wkeuuycukmuqiaom: return $this->api; } public function yauqeuqwioeoqcou($product, $mkucggyaiaukqoce, string $ccamueccusigaaio = self::waqeayycosiamskm) : string { if (in_array($ccamueccusigaaio, [self::kmagyyokkyyyqqay, self::waqeayycosiamskm])) { goto wakmayaoqoskekqy; } $ccamueccusigaaio = self::kmagyyokkyyyqqay; wakmayaoqoskekqy: $eeamcawaiqocomwy = $mgegoogckgsumooq = ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $umkkkaqkwugkemce = $seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $product); if (!($umkkkaqkwugkemce && is_numeric($umkkkaqkwugkemce))) { goto mwsmsguqqkcwiiuk; } if (!($mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce))) { goto qmuwoecuacmkwgem; } $mgegoogckgsumooq = $this->auamgqiwisysomsa()->yswgycwoywsmywyu($mkucggyaiaukqoce); qmuwoecuacmkwgem: if (!$mgegoogckgsumooq) { goto owmuceyswmgueasi; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\165\163\x69\x6e\x67\137\x74\x6f\153\x65\x6e", $mgegoogckgsumooq, trailingslashit(self::uwuwcacyyakgoqsu . $ccamueccusigaaio) . $umkkkaqkwugkemce); owmuceyswmgueasi: mwsmsguqqkcwiiuk: return $eeamcawaiqocomwy; } public function ysuoseskooqusqua() : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x73\165\142\x73\x63\162\151\x70\164\151\157\x6e\137\x63\x68\x65\143\x6b\x5f\x61\x63\143\145\163\x73", self::oimusiegakqgwosg, $this->caokeucsksukesyo()->issssuygyewuaswa()->get(), ["\162\x75\154\145\x5f\x74\x79\x70\145" => "\141\143\x63\145\163\163", "\x61\143\143\x65\163\163\137\x74\171\x70\145" => self::cqycgsyykemiygou]); if (!(self::oimusiegakqgwosg === $sogksuscggsicmac)) { goto eeauyscekuckoues; } $sogksuscggsicmac = false; eeauyscekuckoues: return $sogksuscggsicmac; } public function qmoswyyemykyycko($product) : bool { $weksiguqgqscsoee = false; if (!($umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product))) { goto msemumccgceyugmg; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iueymcwwscwqkiyq = $seumokooiykcomco->igawqaomowicuayw(self::uuseyckuwmiouskw, $umkkkaqkwugkemce); if (!(self::yyigwaqioecwemiw === $iueymcwwscwqkiyq)) { goto eogwckcymuugikuy; } $weksiguqgqscsoee = !empty($seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $umkkkaqkwugkemce)); eogwckcymuugikuy: msemumccgceyugmg: return $weksiguqgqscsoee; } }
