<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f0256adc             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Custom\Herfe\Container; abstract class Common extends Container { const kmagyyokkyyyqqay = "\x70\154\141\171"; const waqeayycosiamskm = "\155\x6f\x76\151\145"; const uwuwcacyyakgoqsu = "\x68\x74\x74\160\163\x3a\57\57\150\141\163\150\x75\x72\x65\x2e\x63\157\155\57"; protected ?API $api = null; public function auamgqiwisysomsa() : API { if ($this->api) { goto skkamseieeusycye; } $this->api = API::symcgieuakksimmu(); skkamseieeusycye: return $this->api; } public function agwayuocqseimuwo($ycoeoaakqyskgykq, $owiuekcekysskaoe) : bool { $sogksuscggsicmac = $this->auamgqiwisysomsa()->subscribe($ycoeoaakqyskgykq, time(), $owiuekcekysskaoe); if (!$sogksuscggsicmac) { goto syiqkaasoueowwui; } if (is_wp_error($sogksuscggsicmac)) { goto cgiscsqwwgqqaeqi; } $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::imeuqgwqyuywuwgm, 1, $ycoeoaakqyskgykq); return true; cgiscsqwwgqqaeqi: $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x45\x72\x72\157\x72\40\157\156\40\x73\165\x62\x73\x63\x72\151\142\145\x20\165\x73\x65\162\40\x6f\x6e\40\x68\x61\163\150\x75\162\x65\x3a\40" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac)); syiqkaasoueowwui: return false; } public function yauqeuqwioeoqcou($product, $mkucggyaiaukqoce, string $ccamueccusigaaio = self::waqeayycosiamskm) : string { if (in_array($ccamueccusigaaio, [self::kmagyyokkyyyqqay, self::waqeayycosiamskm])) { goto giaacoqqqsekcayy; } $ccamueccusigaaio = self::kmagyyokkyyyqqay; giaacoqqqsekcayy: $eeamcawaiqocomwy = $mgegoogckgsumooq = ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $umkkkaqkwugkemce = $seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $product); if (!($umkkkaqkwugkemce && is_numeric($umkkkaqkwugkemce))) { goto wmywuusgukmmaams; } if (!($mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce))) { goto ewymsmkkiksgwysk; } $mgegoogckgsumooq = $this->auamgqiwisysomsa()->yswgycwoywsmywyu($mkucggyaiaukqoce); ewymsmkkiksgwysk: if (!$mgegoogckgsumooq) { goto cmegwsegsosyqcai; } $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\165\x73\x69\156\x67\137\164\x6f\x6b\145\x6e", $mgegoogckgsumooq, trailingslashit(self::uwuwcacyyakgoqsu . $ccamueccusigaaio) . $umkkkaqkwugkemce); cmegwsegsosyqcai: wmywuusgukmmaams: return $eeamcawaiqocomwy; } public function ysuoseskooqusqua() : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\163\x75\142\x73\x63\162\151\160\164\x69\x6f\156\137\143\x68\x65\x63\x6b\x5f\x61\x63\x63\x65\163\163", self::oimusiegakqgwosg, $this->caokeucsksukesyo()->issssuygyewuaswa()->get(), ["\x72\x75\x6c\x65\137\x74\171\160\145" => "\141\143\x63\145\x73\x73", "\141\143\143\x65\163\163\137\x74\x79\160\x65" => self::cqycgsyykemiygou]); if (!(self::oimusiegakqgwosg === $sogksuscggsicmac)) { goto gkyawqqcmigqgaiq; } $sogksuscggsicmac = false; gkyawqqcmigqgaiq: return $sogksuscggsicmac; } public function aewkomyuuweewcce($ycoeoaakqyskgykq) : bool { return (bool) $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::imeuqgwqyuywuwgm, $ycoeoaakqyskgykq); } public function qmoswyyemykyycko($product) : bool { $weksiguqgqscsoee = false; if (!($umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product))) { goto egyyiccaeeiooaua; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $iueymcwwscwqkiyq = $seumokooiykcomco->igawqaomowicuayw(self::uuseyckuwmiouskw, $umkkkaqkwugkemce); if (!(self::yyigwaqioecwemiw === $iueymcwwscwqkiyq)) { goto ooeausyowguqicuo; } $weksiguqgqscsoee = !empty($seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $umkkkaqkwugkemce)); ooeausyowguqicuo: egyyiccaeeiooaua: return $weksiguqgqscsoee; } }
