<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.admin' shared service.

$a = ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php'));
$b = ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());

$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, 'homepage'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'admin_account_logout'));
$c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->load('getSecurity_Logout_Handler_CsrfTokenClearingService.php')));
$c->addHandler(($this->privates['security.logout.handler.session'] ?? $this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler()));

return $this->privates['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.0'] ?? $this->load('getSecurity_ContextListener_0Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.admin'] ?? $this->load('getSecurity_Authentication_Listener_Form_AdminService.php'));
    yield 3 => ($this->privates['security.authentication.listener.anonymous.admin'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_AdminService.php'));
    yield 4 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, ($this->privates['security.authentication.trust_resolver'] ?? $this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')), $a, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $a, 'admin_account_login', false), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('admin', 'security.user_checker', '.security.request_matcher.z8XqMvS', true, false, 'security.user.provider.concrete.in_database', 'admin', 'security.authentication.form_entry_point.admin', NULL, NULL, array(0 => 'form_login', 1 => 'anonymous'), NULL));
