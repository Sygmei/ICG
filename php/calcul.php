<?php

function calcul($data, $immatriculation, $dept, $demande) {
    $dept = explode("+", $dept);

    $departement = $dept[0];
    $exoneration = $dept[1];

    $taxe_gestion_acheminement = 4 + 2.76;

    // Demandes particulières --------------------------------- //
    if ($demande == 2) { // Changement de domicile dans accès prestataire
        return 27.76;
    }

    if ($demande == 3) {
        return 99;
    }

    if ($demande == 4) {
        return 10;
    }

    if ($demande == 5) {
        return 0;
    }
    // ---------------------------------------------------------------------- //

    // ---------------------------------------------------------------------- //
    // Calcul d'age du véhicule
    // ---------------------------------------------------------------------- //
    $date_vehicule = new DateTime($data->date);
    $now = new DateTime();

    $interval = $date_vehicule->diff($now);

    if($interval->format('%Y') < 10) {
        $new = true;
    } else {
        $new = false;
    }
    // ---------------------------------------------------------------------- //
    // ---------------------------------------------------------------------- //
    // ---------------------------------------------------------------------- //

    // ---------------------------------------------------------------------- //
    // Propreté du véhicule
    // ---------------------------------------------------------------------- //
    $e = $data->energie;

    if($e == 'ESS+G.P.L.' || $e == 'ESS+G.NAT' || $e == 'CARB.GAZEUX' || $e == 'BIOCARBUR' || $e == 'SUPERETHANOL' || $e == 'G.P.L.' || $e == 'ELECTRIC' || $e == 'GAZ NAT.VEH' || $e == 'ELEC+ESSENC' || $e == 'ELEC+GAZOLE' || $e == 'AIR COMPRIM' || $e == 'HYDROGENE' || $e == 'ELEC+G.P.L.' || $e == 'ELEC+G.NAT' || $e == 'ESS+ELEC HNR') {
        $propre = true;
    } else if($e == 'ESSENCE' || $e == 'ESS+GAZO' || $e == 'GAZOLE' || $e == 'FUEL-OIL' || $e == 'GAZOLE+GAZO' || $e == 'GAZOGENE' || $e == 'PETROL.LAMP') {
        $propre = false;
    } else {
        $propre = NULL;
        $erreur = 'Energie erreur';
    }
    // ---------------------------------------------------------------------- //
    // ---------------------------------------------------------------------- //
    // ---------------------------------------------------------------------- //

    if($data->type == 'TRR' || $data->type == 'MTT1' || $data->type == 'MTT2' || $data->type == 'MTL' || ($data->type != 'VP' && $data->type != 'TM' && $data->ptac > 3.5)) $departement /= 2;

    $taxe_regionale = $data->cv * $departement;

    if($new == false) $taxe_regionale /= 2;

    if($exoneration == '50' && $propre == true) {
        $taxe_regionale /= 2;
        $taxe_gestion_acheminement = 2.76;
    }
    if($exoneration == '100' && $propre == true) {
        $taxe_regionale = 0;
        $taxe_gestion_acheminement = 2.76;
    }

    if($data->type == 'TRA' || $data->type == 'MAGA' || $data->type == 'REM' || $data->type == 'SREM' || $data->type == 'RESP') {
      return ceil((1.5 * $departement) + 6.76);
    }

    if($data->type == 'CL') {
      return 0;
    }


    if($data->type != 'VP' && $data->type != 'MTL' && $data->type != 'MTT1' && $data->type != 'MTT2' && $data->type != 'CL' && $data->type != 'VASP') {
        if($data->ptac < 3.5) $taxe_pro = 34;
        else if($data->ptac < 6) $taxe_pro = 127;
        else if($data->ptac < 11) $taxe_pro = 189;
        else $taxe_pro = 285;

        if($data->type == 'TCP') $taxe_pro = 285;
    }

    if($date_vehicule->format('Y') == '2017') {
        switch($data->co2) {
            case 127:
                $taxe_co2 = 50;
                break;
            case 128:
                $taxe_co2 = 53;
                break;
            case 129:
                $taxe_co2 = 60;
                break;
            case 130:
                $taxe_co2 = 73;
                break;
            case 131:
                $taxe_co2 = 90;
                break;
            case 132:
                $taxe_co2 = 113;
                break;
            case 133:
                $taxe_co2 = 140;
                break;
            case 134:
                $taxe_co2 = 173;
                break;
            case 135:
                $taxe_co2 = 210;
                break;
            case 136:
                $taxe_co2 = 253;
                break;
            case 137:
                $taxe_co2 = 300;
                break;
            case 138:
                $taxe_co2 = 353;
                break;
            case 139:
                $taxe_co2 = 410;
                break;
            case 140:
                $taxe_co2 = 473;
                break;
            case 141:
                $taxe_co2 = 540;
                break;
            case 142:
                $taxe_co2 = 613;
                break;
            case 143:
                $taxe_co2 = 690;
                break;
            case 144:
                $taxe_co2 = 773;
                break;
            case 145:
                $taxe_co2 = 860;
                break;
            case 146:
                $taxe_co2 = 953;
                break;
            case 147:
                $taxe_co2 = 1050;
                break;
            case 148:
                $taxe_co2 = 1153;
                break;
            case 149:
                $taxe_co2 = 1260;
                break;
            case 150:
                $taxe_co2 = 1373;
                break;
            case 151:
                $taxe_co2 = 1490;
                break;
            case 152:
                $taxe_co2 = 1613;
                break;
            case 153:
                $taxe_co2 = 1740;
                break;
            case 154:
                $taxe_co2 = 1873;
                break;
            case 155:
                $taxe_co2 = 2010;
                break;
            case 156:
                $taxe_co2 = 2153;
                break;
            case 157:
                $taxe_co2 = 2300;
                break;
            case 158:
                $taxe_co2 = 1453;
                break;
            case 159:
                $taxe_co2 = 2610;
                break;
            case 160:
                $taxe_co2 = 2773;
                break;
            case 161:
                $taxe_co2 = 2940;
                break;
            case 162:
                $taxe_co2 = 3113;
                break;
            case 163:
                $taxe_co2 = 3290;
                break;
            case 164:
                $taxe_co2 = 3473;
                break;
            case 165:
                $taxe_co2 = 3660;
                break;
            case 166:
                $taxe_co2 = 3853;
                break;
            case 167:
                $taxe_co2 = 4050;
                break;
            case 168:
                $taxe_co2 = 4253;
                break;
            case 169:
                $taxe_co2 = 4460;
                break;
            case 170:
                $taxe_co2 = 4673;
                break;
            case 171:
                $taxe_co2 = 4890;
                break;
            case 172:
                $taxe_co2 = 5113;
                break;
            case 173:
                $taxe_co2 = 5340;
                break;
            case 174:
                $taxe_co2 = 5573;
                break;
            case 175:
                $taxe_co2 = 5810;
                break;
            case 176:
                $taxe_co2 = 6053;
                break;
            case 177:
                $taxe_co2 = 6300;
                break;
            case 178:
                $taxe_co2 = 6553;
                break;
            case 179:
                $taxe_co2 = 6810;
                break;
            case 180:
                $taxe_co2 = 7073;
                break;
            case 181:
                $taxe_co2 = 7340;
                break;
            case 182:
                $taxe_co2 = 7613;
                break;
            case 183:
                $taxe_co2 = 7890;
                break;
            case 184:
                $taxe_co2 = 8173;
                break;
            case 185:
                $taxe_co2 = 8460;
                break;
            case 186:
                $taxe_co2 = 8753;
                break;
            case 187:
                $taxe_co2 = 9050;
                break;
            case 188:
                $taxe_co2 = 9353;
                break;
            case 189:
                $taxe_co2 = 9660;
                break;
            case 190:
                $taxe_co2 = 9973;
                break;
            case 191:
                $taxe_co2 = 10000;
                break;

            default:
                $taxe_co2 = 0;
        }
        if($data->co2 > 191) $taxe_co2 = 10000;
    } else {
        $date_co2 = new DateTime('2004-06-01');

        // Si mise en circulation avant Le 1 juin 2004
        if($date_co2->format('U') > $date_vehicule->format('U')) {
            $taxe_co2 = 0;
        }
        // Sinon 2euros pas grammes de co2 entre 200 et 250 puis 4euros par grammes
        else {
            if($data->co2 > 200) {
                $co2_payant = $data->co2 - 200;

                $taxe_co2 = 0;
                if($co2_payant > 50) {
                    $taxe_co2 = $taxe_co2 + (50 * 2);
                    $co2_payant = $co2_payant - 50;
                    $taxe_co2 = $taxe_co2 + ($co2_payant * 4);
                }
                else $taxe_co2 = $taxe_co2 + ($co2_payant * 2);
            }
        }
    }

    // Réduction de 40% sur la taxe de co2 pour l'énergie Superéthanol
    if($data->energie == 'SUPERETHANOL') {
        $taxe_co2 = $taxe_co2 * 0.6;
    }

    // Camionnette et véhicule handicapé exempté de taxe de co2
    if($data->type == 'CTTE' || $data->type_detail == 'HANDICAP' || $data->type == 'VASP') {
        $taxe_co2 = 0;
    }

    return ceil($taxe_gestion_acheminement + $taxe_regionale + $taxe_pro + $taxe_co2);
}

?>
