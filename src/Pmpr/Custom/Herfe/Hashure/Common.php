<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6463ac61aee67             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Custom\Herfe\Container; abstract class Common extends Container { const kmagyyokkyyyqqay = "\160\x6c\141\x79"; const waqeayycosiamskm = "\155\157\x76\151\145"; const uwuwcacyyakgoqsu = "\x68\164\x74\160\163\72\57\57\150\141\163\150\165\162\145\56\143\157\x6d\57"; protected ?API $api = null; public function auamgqiwisysomsa() : API { if ($this->api) { goto gygawoqywkukmqee; } $this->api = API::symcgieuakksimmu(); gygawoqywkukmqee: return $this->api; } public function yauqeuqwioeoqcou($product, $mkucggyaiaukqoce, string $ccamueccusigaaio = self::waqeayycosiamskm) : string { if (in_array($ccamueccusigaaio, [self::kmagyyokkyyyqqay, self::waqeayycosiamskm])) { goto kciouyuaqkyqomam; } $ccamueccusigaaio = self::kmagyyokkyyyqqay; kciouyuaqkyqomam: $eeamcawaiqocomwy = $mgegoogckgsumooq = ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $umkkkaqkwugkemce = $seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $product); if (!($umkkkaqkwugkemce && is_numeric($umkkkaqkwugkemce))) { goto qsygcycwieukkgwc; } if (!($mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce))) { goto wwkgkaecgiwggcck; } $mgegoogckgsumooq = $this->auamgqiwisysomsa()->yswgycwoywsmywyu($mkucggyaiaukqoce); wwkgkaecgiwggcck: if (!$mgegoogckgsumooq) { goto umgaesggesswoaqe; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x75\163\151\x6e\147\x5f\164\157\153\145\156", $mgegoogckgsumooq, trailingslashit(self::uwuwcacyyakgoqsu . $ccamueccusigaaio) . $umkkkaqkwugkemce); umgaesggesswoaqe: qsygcycwieukkgwc: return $eeamcawaiqocomwy; } public function ysuoseskooqusqua() : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\163\165\x62\163\x63\162\151\x70\x74\151\157\x6e\x5f\143\150\145\143\153\x5f\141\x63\143\x65\x73\x73", self::oimusiegakqgwosg, $this->caokeucsksukesyo()->issssuygyewuaswa()->get(), ["\x72\x75\x6c\x65\x5f\164\x79\160\x65" => "\141\x63\143\145\163\x73", "\x61\x63\143\145\x73\x73\x5f\x74\x79\x70\145" => self::cqycgsyykemiygou]); if (!(self::oimusiegakqgwosg === $sogksuscggsicmac)) { goto kiwqkcaekqqyuegq; } $sogksuscggsicmac = false; kiwqkcaekqqyuegq: return $sogksuscggsicmac; } public function qmoswyyemykyycko($product) : bool { $weksiguqgqscsoee = false; if (!($umkkkaqkwugkemce = $this->caokeucsksukesyo()->wikusamwomuogoau()->imgiueoimkemicow($product))) { goto iqcogmsguwoikame; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iueymcwwscwqkiyq = $seumokooiykcomco->igawqaomowicuayw(self::uuseyckuwmiouskw, $umkkkaqkwugkemce); if (!(self::yyigwaqioecwemiw === $iueymcwwscwqkiyq)) { goto quwcqmyokicssyew; } $weksiguqgqscsoee = !empty($seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $umkkkaqkwugkemce)); quwcqmyokicssyew: iqcogmsguwoikame: return $weksiguqgqscsoee; } }
