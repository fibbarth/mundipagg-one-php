<?php

namespace Gateway\One\DataContract\TransactionReport\TransactionReportData;

/**
 * Class Header
 * @package Gateway\One\DataContract\TransactionReport\TransactionReportData
 */
class Header
{
    protected $TransactionProcessedDate;

    protected $ReportFileCreateDate;

    protected $Version;

    /**
     * @return string
     */
    public function getTransactionProcessedDate()
    {
        return $this->TransactionProcessedDate;
    }

    /**
     * @param string $TransactionProcessedDate
     * @return $this
     */
    public function setTransactionProcessedDate($TransactionProcessedDate)
    {
        $this->TransactionProcessedDate = $TransactionProcessedDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getReportFileCreateDate()
    {
        return $this->ReportFileCreateDate;
    }

    /**
     * @param string $ReportFileCreateDate
     * @return $this
     */
    public function setReportFileCreateDate($reportFileCreateDate)
    {
        $this->ReportFileCreateDate = $reportFileCreateDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->Version = $version;

        return $this;
    }
}