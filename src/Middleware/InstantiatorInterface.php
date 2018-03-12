<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     12/03/2018
// Time:     18:39
// Project:  lib-session
//
declare(strict_types = 1);
namespace CodeInc\Session\Middleware;
use CodeInc\Session\SessionManager;
use Psr\Http\Message\ServerRequestInterface;


/**
 * Interface InstantiatorInterface
 *
 * @package CodeInc\Session\Middleware
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface InstantiatorInterface
{
    /**
     * @param ServerRequestInterface $request
     * @return SessionManager
     */
    public function instantiate(ServerRequestInterface $request):SessionManager;
}