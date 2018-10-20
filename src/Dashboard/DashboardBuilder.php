<?php

namespace App\Dashboard;

class DashboardBuilder {
    private $blockBuilder;

    public function __construct(DashboardBlockBuilderInterface $blockBuilder) {
        $this->blockBuilder = $blockBuilder;
    }
}