<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bbaa0d7dee             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateDatabase; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use WC_Product; use WP_Query; class Product extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\x69\164", [$this, "\163\x79\x77\x6b\x63\x6b\163\155\x77\x79\x6f\x6b\x67\153\x67\143"])->qcsmikeggeemccuu("\160\x72\145\137\x67\x65\164\x5f\160\157\163\164\163", [$this, "\x69\145\151\153\167\165\x73\161\165\167\141\167\171\x69\165\x65"])->qcsmikeggeemccuu("\x77\x6f\157\143\x6f\x6d\155\x65\x72\x63\145\x5f\x70\x72\157\x64\x75\x63\x74\137\x6d\145\x74\x61\137\x65\x6e\144", [$this, "\x71\141\x61\x77\155\153\171\153\155\165\145\145\x75\143\x67\x6f"], 0); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x77\157\157\143\157\155\155\x65\162\143\x65\137\162\145\x67\151\163\164\145\162\137\x70\x6f\163\x74\x5f\164\x79\x70\145\137\x70\162\157\x64\165\x63\x74", [$this, "\171\x63\x69\x61\x75\x69\x79\x6b\x75\x71\x61\153\x65\x79\x75\x65"]); } public function sywkcksmwyokgkgc() { if (!ManipulatePost::uqwgsuysegkweago(self::oguseymmyyoyaako)) { goto cmqucgoewuyieoyk; } MetaBox::cgygmuguceeosoey(self::uuseyckuwmiouskw, __("\x56\x69\163\165\141\x6c\x20\x26\x20\101\x75\x64\x69\164\157\162\171", PR__CST__HERFE), true)->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::uuseyckuwmiouskw, __("\123\x74\x61\x74\165\x73", PR__CST__HERFE))->acauweqyyugwisqc([self::NONE => __("\x4e\157\156\x65", PR__CST__HERFE), self::yyigwaqioecwemiw => __("\126\x69\x73\x75\x61\154", PR__CST__HERFE), self::gcwcqmwwgiqsaame => __("\101\165\x64\151\x74\157\x72\171", PR__CST__HERFE)])->eyygsasuqmommkua(self::NONE)->eumecwmqmukqgyea())->mgieiwsmcswmmiim(self::oguseymmyyoyaako)->igeseuiwcwwsuesi()->saemoowcasogykak(IconFontawesomeInterface::isokaoamoeicecmy); cmqucgoewuyieoyk: } public function ieikwusquwawyiue($gqgemcmoicmgaqie) { if (!($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_tag() && $gqgemcmoicmgaqie->is_main_query())) { goto yqykqysmiquwoasu; } $gqgemcmoicmgaqie = ManipulateDatabase::ccwowuakmqoemoem($gqgemcmoicmgaqie, [self::uouymeyqasaeckso => [self::mswoacegomcucaik, self::oguseymmyyoyaako, "\145\156\147\x6c\x69\163\150\137\x61\x72\x74\x69\143\154\145"]]); yqykqysmiquwoasu: return $gqgemcmoicmgaqie; } public function qaawmkykmueeucgo() { global $product; if (!$product instanceof WC_Product) { goto ayyweymyuuiauamo; } echo get_the_term_list($product->get_id(), self::ocsomysosuqaimuc, "\74\x73\160\x61\156\40\143\154\141\163\163\75\x22\x74\x61\x67\147\x65\144\x5f\141\163\42\x3e" . _n("\124\x61\x67\72", "\124\141\x67\163\x3a", count(ManipulatePost::weescwwgqgiyumyw($product->get_id(), "\x70\x6f\x73\164\x5f\164\x61\147")), PR__CST__HERFE) . "\40", "\40\174\x20", "\74\57\x73\x70\x61\x6e\76"); ayyweymyuuiauamo: } public function yciauiykuqakeyue($ywmkwiwkosakssii) : array { $seyqqsmuaiegkeeq = [self::ocsomysosuqaimuc]; if (isset($seyqqsmuaiegkeeq["\164\141\170\157\x6e\x6f\x6d\151\145\x73"])) { goto mosqsmqimqgqoase; } $ywmkwiwkosakssii["\x74\141\170\x6f\x6e\157\155\x69\x65\x73"][] = self::ocsomysosuqaimuc; goto omugkkesagcyagmk; mosqsmqimqgqoase: $ywmkwiwkosakssii["\x74\x61\170\157\156\x6f\x6d\151\x65\x73"] = [self::ocsomysosuqaimuc]; omugkkesagcyagmk: return $ywmkwiwkosakssii; } }
