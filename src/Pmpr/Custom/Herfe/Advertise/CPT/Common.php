<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebf66cbec             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; abstract class Common extends CPT { const eskcyegwccqukqwc = "\x61\x64\144\x72\145\x73\x73"; const cqkewmmoacqamyce = "\141\x64\x76\x65\162\164\x69\x73\145"; const kueeagiqseeaeogs = "\141\x64\166\145\x72\164\151\163\145\x72"; const caoyceiaegocywwg = "\x6d\141\x70\x5f\x6c\157\x63\x61\x74\x69\157\156"; const wicyseygwoyqqyya = "\163\x6f\143\151\141\154\137\x61\143\x63\x6f\x75\156\164\x73"; const yemysyaskkuqgeyc = "\x63\157\x6e\x74\141\143\164\137\151\156\x66\157\162\155\141\x74\151\157\x6e"; public function __construct($aokagokqyuysuksm = null) { parent::__construct($aokagokqyuysuksm); $this->oyeskqayoscwciem()->hsgasemokseccoao($this->miwqiiqeegeqcwis()); } public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->soeowumgcwuiaica(true)->esgmeqiuqsaomgmw(false)->kwksqwkmuuoakaqg(true)->wiskakymeaywyeuw(self::cqkewmmoacqamyce); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\x72\145\x5f\147\145\164\x5f\x70\x6f\x73\x74\x73", [$this, "\x63\163\157\163\x6f\167\x63\x67\x65\x6b\147\x75\x69\147\161\153"])->cecaguuoecmccuse("\165\x73\145\162\x5f\150\141\x73\137\x63\x61\160", [$this, "\x71\x71\171\x73\165\171\163\171\x61\x79\145\163\171\x6f\141\x6d"], 10, 3); parent::kgquecmsgcouyaya(); } public function ucgqwmuigscaceuu() : bool { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); return !$ewgmommeawggyaek->scmcyesmmikkucie(Constants::gewmeskawiqikkoc) && $ewgmommeawggyaek->scmcyesmmikkucie(self::kueeagiqseeaeogs); } public function qqysuysyayesyoam($smiuugcoukoiceoq, $smgioooysaacyigy, $ywmkwiwkosakssii) { if (!(isset($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[2]) && $this->ucgqwmuigscaceuu())) { goto ciucewqgyoiouesq; } $gmgycmymygamqwsk = ["\145\x64\x69\164\x5f\160\x6f\x73\x74", "\x64\145\154\145\164\145\137\160\x6f\163\x74"]; if (!in_array($ywmkwiwkosakssii[0], $gmgycmymygamqwsk)) { goto osuscoaaomwcqkew; } $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, [], Constants::oyaoekcogwkcekcc); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ywmkwiwkosakssii[2]); if (!($seumokooiykcomco->gueasuouwqysmomu($post) === $useksmwkuswkwcqg)) { goto aoquoewagkseayug; } if (!(!$this->amgkkwcswommwoqw() || !$seumokooiykcomco->uqwgsuysegkweago($useksmwkuswkwcqg, Constants::ocayisqocqoekqiq))) { goto qiaimmucomukkeka; } if (in_array($seumokooiykcomco->iooowgsqoyqseyuu($post), $wyoiwuqokyeeuguk, true)) { goto egsycocugqyyswsi; } foreach ((array) $smgioooysaacyigy as $gkswkiicccswksiq) { if (!array_key_exists($gkswkiicccswksiq, $smiuugcoukoiceoq)) { goto uoeasoimegouymka; } $smiuugcoukoiceoq[$gkswkiicccswksiq] = false; uoeasoimegouymka: qkcsykuocwuyaice: } oocuemosmeeekgas: egsycocugqyyswsi: qiaimmucomukkeka: aoquoewagkseayug: osuscoaaomwcqkew: ciucewqgyoiouesq: return $smiuugcoukoiceoq; } public function csosowcgekguigqk($gqgemcmoicmgaqie) { $uqewsooiogygggym = $gqgemcmoicmgaqie->get(Constants::uouymeyqasaeckso); if (is_array($uqewsooiogygggym)) { goto cgmgqucewwssmicq; } $uqewsooiogygggym = [$uqewsooiogygggym]; cgmgqucewwssmicq: if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && in_array($this->miwqiiqeegeqcwis(), $uqewsooiogygggym))) { goto ussceseaimqywuiy; } if (!$this->ucgqwmuigscaceuu()) { goto mkomygccqkmkumsi; } $gqgemcmoicmgaqie = $this->msqgaouaissgquek($gqgemcmoicmgaqie); mkomygccqkmkumsi: ussceseaimqywuiy: return $gqgemcmoicmgaqie; } public abstract function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query; public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if (!($post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik))) { goto oyiuemaaykgkqqam; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); $icwicymcioeyeyek["\x6d\157\x72\145\137\151\x6e\x66\x6f\x72\x6d\141\164\x69\x6f\x6e" . Constants::icmokuskwoskgace] = sprintf(__("\x4d\x6f\x72\x65\x20\111\x6e\146\x6f\162\155\x61\x74\x69\x6f\156\x20\x41\x62\x6f\x75\164\x20\45\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . Constants::icmokuskwoskgace] = sprintf(__("\x25\163\x27\x73\40\123\157\143\151\141\x6c\x20\x41\x63\x63\x6f\165\156\x74\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . Constants::icmokuskwoskgace] = sprintf(__("\x25\x73\x27\163\40\x49\156\x66\157\x72\155\141\x74\x69\x6f\x6e", PR__CST__HERFE), $meqocwsecsywiiqs); oyiuemaaykgkqqam: return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function wcwascmcugywicqi($aokagokqyuysuksm) : Collection { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->qqmgmgasauucoago($aokagokqyuysuksm)->gswweykyogmsyawy(__("\111\x74\x65\x6d\163", PR__CST__HERFE))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\151\x74\x6c\x65", PR__CST__HERFE)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\157\x6e", PR__CST__HERFE))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->usosgsaaimqcysyk(); } public function ouymyccisioymugo() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\143\x6f\x6e\164\141\x63\164\x5f\x69\x6e\146\x6f\162\155\x61\164\151\157\156")->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum)->gswweykyogmsyawy(__("\103\157\156\x74\x61\143\164\40\x49\x6e\x66\x6f\x72\x6d\141\x74\151\157\x6e", PR__CST__HERFE))->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\124\x79\x70\x65", PR__CST__HERFE))->acauweqyyugwisqc([Constants::ogigqueukwysusii => __("\114\151\156\x6b", PR__CST__HERFE), Constants::memskaacyikisggk => __("\x50\x68\x6f\x6e\x65", PR__CST__HERFE), Constants::muqaqimusmckkieq => __("\105\155\x61\151\x6c", PR__CST__HERFE), Constants::eamuoicwqcokyggc => __("\110\157\165\x72\163", PR__CST__HERFE), Constants::eqcaaskcigqcmmww => __("\114\x6f\x63\141\x74\151\157\x6e", PR__CST__HERFE)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\126\x61\154\x75\x65", PR__CST__HERFE))->kqqqugemmqagucuq()->mkmssscwmeekwgqo())); } public function yucwyuocwkgwwiwy() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\163\157\143\151\x61\154\x5f\x61\x63\x63\x6f\165\x6e\x74\x73")->gswweykyogmsyawy(__("\x53\157\x63\x69\x61\x6c\40\x41\143\x63\157\165\x6e\x74\163", PR__CST__HERFE))->saemoowcasogykak(IconInterface::sigiamiycuoykgei)->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::wicyseygwoyqqyya)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::auqoykcmsiauccao)->gswweykyogmsyawy(__("\x55\162\154", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo())); } public function cgyweieiiwqaueke() : array { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return [$uuyucgkyusckoaeq->quaegkgkucwyeiqg(Constants::mscgqqsgosmsqygq)->gswweykyogmsyawy(__("\x4c\157\147\x6f", PR__CST__HERFE))->eswksowyeqcsokew(Constants::egwoacukmsioosum)->mkmssscwmeekwgqo()->ycueqsmmommygueu(), $uuyucgkyusckoaeq->uouyygwcgsmygaee(self::eskcyegwccqukqwc)->gswweykyogmsyawy(__("\x41\x64\x64\x72\x65\163\x73", PR__CST__HERFE))->qsecygiycssgacqs(3)->mkmssscwmeekwgqo(), $uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caoyceiaegocywwg)->gswweykyogmsyawy(__("\x4d\x61\160\40\x4c\x6f\x63\x61\x74\151\157\156\40\125\x72\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (is_array($soiqkasigoogeiuw)) { goto gqmewagyagamokok; } $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; gqmewagyagamokok: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oyiyuuoguwwaksaa = [Constants::ygyiacciqgemekwc => Constants::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [Constants::ykemsyouoqyoaysg => "\x3d", Constants::ascagqcquwgmygkm => Constants::gicwoyoeuwosyuau, Constants::ciyoccqkiamemcmm => $seumokooiykcomco->iooowgsqoyqseyuu($cmeamwmgwcmoweao)]; uycesqqkoeamocgm: } sqmoqymckwsogsqg: $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(Constants::aqmqeywcmyguggoo, [Constants::kkcqmwgccaygggcu => $qawuqcsueakkgiio, Constants::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::goqgcigmiawyauai => 2]); return [Constants::qwumqqyuasyskkkc => $wpQuery->get_posts(), Constants::uiiqiokqwmccomiu => $wpQuery->max_num_pages, Constants::asmooogmgyecqqka => $qawuqcsueakkgiio]; } public function kmqoyaiymkcmomwi($aiooqyausygaasqm, $aigsgikoosikweqa) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ycuekasamuuasigw = $seumokooiykcomco->iooowgsqoyqseyuu($aigsgikoosikweqa); $cwgqkcumeaswoscu = $seumokooiykcomco->iooowgsqoyqseyuu($aiooqyausygaasqm); if (!($ycuekasamuuasigw !== $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cwgqkcumeaswoscu))) { goto ceiwqkyquikcemmo; } $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::kueeagiqseeaeogs, $ycuekasamuuasigw, $cwgqkcumeaswoscu); ceiwqkyquikcemmo: } public function amgkkwcswommwoqw() : bool { return true; } }
