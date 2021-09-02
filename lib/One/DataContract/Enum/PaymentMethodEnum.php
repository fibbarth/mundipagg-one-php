<?php

namespace Gateway\One\DataContract\Enum;

abstract class PaymentMethodEnum
{
    const AUTO = 0;
    const SIMULATOR = 1;
    const REDECARD_KOMERCI_STAGING = 3;
    const REDECARD_KOMERCI = 3;
    const CIELO_STAGING = 4;
    const CIELO = 5;
    const ELAVON_SITEF = 15;
    const REDECARD_SITEF = 16;
    const CIELO_SITEF = 17;
    const GETNET_SITEF = 18;
    const STONE_STAGING = 19;
    const STONE = 20;
    const HUGCARD_SITEF = 21;
    const ELAVON_STAGING = 22;
    const ELAVON = 23;
    const HUGCARD_SITEF_STAGING = 24;
    const ANDARAKI_SITEF = 25;
    const RENNER_SITEF = 26;
    const AURA_SITEF = 31;
    const REDECARD_KOMERCI_WCF = 32;
    const REDECARD_KOMERCI_WCF_STAGING = 33;
    const PAN_SITEF_STAGING = 34;
    const PAN_SITEF = 35;
    const GETNET = 37;
}
