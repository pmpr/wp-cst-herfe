<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a386d39c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Container; class Account extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_register_form', [$this, 'yuqwaegkguiwmaws'])->qcsmikeggeemccuu('woocommerce_created_customer', [$this, 'okgyskqokqusicse'])->qcsmikeggeemccuu('woocommerce_register_post', [$this, 'mwsgoeieagogmiae'], 10, 3); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('manage_users_columns', [$this, 'ciwuisugoymqgows'])->cecaguuoecmccuse('manage_users_custom_column', [$this, 'qiiigaigmuqoyiig'], 10, 3); } public function ciwuisugoymqgows($wkkweuacukumqmya) { $wkkweuacukumqmya = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->sggceaqggqqsqaoo($wkkweuacukumqmya, ['billing_phone' => __('Phone', PR__CST__HERFE)], 3); return $wkkweuacukumqmya; } public function qiiigaigmuqoyiig($uiymkeeaukcyqqik, $qgoqiacsiccwoawi, $ycoeoaakqyskgykq) { switch ($qgoqiacsiccwoawi) { case 'billing_phone': return $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw($qgoqiacsiccwoawi, $ycoeoaakqyskgykq); default: } return $uiymkeeaukcyqqik; } public function yuqwaegkguiwmaws() { $ikgwqyuyckaewsow = $this->icqmkomaisgkqomy(); foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ywmkwiwkosakssii) { $wwgucssaecqekuek = $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym] ?? []; $wwgucssaecqekuek[Constants::gouqcwikiiygyasc] = "reg_{$ymqmyyeuycgmigyo}"; $wwgucssaecqekuek[Constants::NAME] = $ymqmyyeuycgmigyo; $pkyyagewkiyckmwy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu] ?? ''; if ($pkyyagewkiyckmwy && isset($ywmkwiwkosakssii[Constants::ceykmaywyicawmau]) && $ywmkwiwkosakssii[Constants::ceykmaywyicawmau]) { $pkyyagewkiyckmwy .= '&nbsp;' . $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->gmqyuaqwgiayskei('*', ['class' => 'required']); } if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($ymqmyyeuycgmigyo)) { $wwgucssaecqekuek[Constants::ciyoccqkiamemcmm] = $eqgoocgaqwqcimie; } echo $this->iuygowkemiiwqmiw('field', [Constants::uissasisiuymwsmu => $pkyyagewkiyckmwy, Constants::ysskgssgwuwmqwym => $wwgucssaecqekuek]); } } public function mwsgoeieagogmiae($yewiaiaauukwsgku, $owaiikyuwwwmswgc, $ueeagokqmgisgauy) { $ikgwqyuyckaewsow = $this->icqmkomaisgkqomy(); foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ywmkwiwkosakssii) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($ymqmyyeuycgmigyo); $pkyyagewkiyckmwy = $ywmkwiwkosakssii[Constants::uissasisiuymwsmu] ?? ''; $uamcoiueqaamsqma = ''; if (!$eqgoocgaqwqcimie && isset($ywmkwiwkosakssii[Constants::ceykmaywyicawmau]) && $ywmkwiwkosakssii[Constants::ceykmaywyicawmau]) { $uamcoiueqaamsqma = sprintf(__('Field %s is required!', PR__CST__HERFE), $pkyyagewkiyckmwy); } else { $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($eqgoocgaqwqcimie); switch ($ymqmyyeuycgmigyo) { case 'billing_last_name': case 'billing_first_name': if (strlen(trim($eqgoocgaqwqcimie)) < 3) { $uamcoiueqaamsqma = sprintf(__('Please enter at least %s characters for %s.', PR__CST__HERFE), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(3), $pkyyagewkiyckmwy); } break; case 'billing_phone': if (!$this->caokeucsksukesyo()->gyecsegqciqykomu()->uqomuowmcuauuikc($eqgoocgaqwqcimie, null)) { $uamcoiueqaamsqma = __('Please enter a valid phone number.', PR__CST__HERFE); } break; case 'billing_national_code': break; } } if ($uamcoiueqaamsqma) { $this->caokeucsksukesyo()->euekiyuksecoccus()->add($ueeagokqmgisgauy, "{$ymqmyyeuycgmigyo}_error", $uamcoiueqaamsqma); } } return $ueeagokqmgisgauy; } public function okgyskqokqusicse($isgkwgyccsiqyguo) { if ($ikgwqyuyckaewsow = $this->icqmkomaisgkqomy()) { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $fwigoyyqcikqyoyq = $this->uwkmaywceaaaigwo()->gksccikkaamikckm(); foreach ($ikgwqyuyckaewsow as $ymqmyyeuycgmigyo => $ywmkwiwkosakssii) { if (isset($_POST[$ymqmyyeuycgmigyo])) { $ewgmommeawggyaek->ksmqawcowkmegigw($ymqmyyeuycgmigyo, $fwigoyyqcikqyoyq->aoeoykwemwaqsikc($_POST[$ymqmyyeuycgmigyo]), $isgkwgyccsiqyguo); } } } } public function icqmkomaisgkqomy() { return [ 'billing_phone' => [Constants::uissasisiuymwsmu => __('Phone', PR__CST__HERFE), Constants::ysskgssgwuwmqwym => [Constants::squoamkioomemiyi => 'tel'], Constants::ceykmaywyicawmau => true], ]; } }
