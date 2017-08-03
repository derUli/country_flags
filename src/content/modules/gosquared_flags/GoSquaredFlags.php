<?php

class GoSquaredFlags extends Controller
{

    private $moduleName = "gosquared_flags";

    public function getSettingsLinkText()
    {
        return get_translation("info");
    }

    public function getSettingsHeadline()
    {
        return "Flag Icons by GoSquared (http://www.gosquared.com/)";
    }

    public function settings()
    {
        $changelogFile = ModuleHelper::buildModuleRessourcePath($this->moduleName, "Hello.txt");
        $text = file_get_contents($changelogFile);
        $text = htmlspecialchars($text);
        $text = nl2br($text);
        return $text;
    }
}