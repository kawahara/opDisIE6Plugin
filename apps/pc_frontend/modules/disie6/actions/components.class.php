<?php

/**
 * This file is part of the OpenPNE package.
 * (c) OpenPNE Project (http://www.openpne.jp/)
 *
 * For the full copyright and license information, please view the LICENSE
 * file and the NOTICE file that were distributed with this source code.
 */

class disie6Components extends sfComponents
{
  protected function checkUserAgent()
  {
    $this->isIE6 = false;
    $userAgent = getenv("HTTP_USER_AGENT");
    if(preg_match('/MSIE\s?[5-6]\.[05]/', $userAgent))
    {
      $this->isIE6 = true;
    }
  }

  public function executeDisie6(sfWebRequest $request)
  {
    $this->checkUserAgent();
  }

  public function executeDisMessage(sfWebRequest $request)
  {
    $this->checkUserAgent();
  }
}

