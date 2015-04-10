<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/i')) {
            // iInicio
            if ($pathinfo === '/iInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloInternosBundle\\Controller\\DefaultController::iInicioAction',  '_route' => 'iInicio',);
            }

            // iArticulos
            if ($pathinfo === '/iArticulos') {
                return array (  '_controller' => 'AngelesVida\\ModuloInternosBundle\\Controller\\DefaultController::iArticulosAction',  '_route' => 'iArticulos',);
            }

            // iHorarios
            if ($pathinfo === '/iHorarios') {
                return array (  '_controller' => 'AngelesVida\\ModuloInternosBundle\\Controller\\DefaultController::iHorariosAction',  '_route' => 'iHorarios',);
            }

        }

        // modulo_asociacion_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulo_asociacion_homepage')), array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/As')) {
            // AsInicio
            if ($pathinfo === '/AsInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'AsInicio',);
            }

            // AsSubirArchivo
            if ($pathinfo === '/AsSubirArchivo') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsSubirArchivoAction',  '_route' => 'AsSubirArchivo',);
            }

            // AsEstadosDeCuenta
            if ($pathinfo === '/AsEstadosDeCuenta') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsEstadosDeCuentaAction',  '_route' => 'AsEstadosDeCuenta',);
            }

            // AsComunicados
            if ($pathinfo === '/AsComunicados') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsComunicadosAction',  '_route' => 'AsComunicados',);
            }

            // AsDescargarEc
            if ($pathinfo === '/AsDescargarEc') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsDescargarEcAction',  '_route' => 'AsDescargarEc',);
            }

            // AsEliminarEc
            if ($pathinfo === '/AsEliminarEc') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsEliminarEcAction',  '_route' => 'AsEliminarEc',);
            }

            // AsVerEc
            if ($pathinfo === '/AsVerEc') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsVerEcAction',  '_route' => 'AsVerEc',);
            }

            // AsDescargarCom
            if ($pathinfo === '/AsDescargarCom') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsDescargarComAction',  '_route' => 'AsDescargarCom',);
            }

            // AsEliminarCom
            if ($pathinfo === '/AsEliminarCom') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsEliminarComAction',  '_route' => 'AsEliminarCom',);
            }

            // AsVerCom
            if ($pathinfo === '/AsVerCom') {
                return array (  '_controller' => 'AngelesVida\\ModuloAsociacionBundle\\Controller\\DefaultController::AsVerComAction',  '_route' => 'AsVerCom',);
            }

        }

        if (0 === strpos($pathinfo, '/actividad')) {
            // actividad
            if (rtrim($pathinfo, '/') === '/actividad') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'actividad');
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::indexAction',  '_route' => 'actividad',);
            }
            not_actividad:

            // actividad_create
            if ($pathinfo === '/actividad/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_actividad_create;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::createAction',  '_route' => 'actividad_create',);
            }
            not_actividad_create:

            // actividad_new
            if ($pathinfo === '/actividad/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad_new;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::newAction',  '_route' => 'actividad_new',);
            }
            not_actividad_new:

            // actividad_show
            if (preg_match('#^/actividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_show')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::showAction',));
            }
            not_actividad_show:

            // actividad_edit
            if (preg_match('#^/actividad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_actividad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_edit')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::editAction',));
            }
            not_actividad_edit:

            // actividad_update
            if (preg_match('#^/actividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_actividad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_update')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::updateAction',));
            }
            not_actividad_update:

            // actividad_delete
            if (preg_match('#^/actividad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_actividad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'actividad_delete')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ActividadController::deleteAction',));
            }
            not_actividad_delete:

        }

        // angelesvida_database_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'angelesvida_database_default_index')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/enfermedad')) {
            // enfermedad
            if (rtrim($pathinfo, '/') === '/enfermedad') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enfermedad;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'enfermedad');
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::indexAction',  '_route' => 'enfermedad',);
            }
            not_enfermedad:

            // enfermedad_create
            if ($pathinfo === '/enfermedad/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_enfermedad_create;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::createAction',  '_route' => 'enfermedad_create',);
            }
            not_enfermedad_create:

            // enfermedad_new
            if ($pathinfo === '/enfermedad/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enfermedad_new;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::newAction',  '_route' => 'enfermedad_new',);
            }
            not_enfermedad_new:

            // enfermedad_show
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enfermedad_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_show')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::showAction',));
            }
            not_enfermedad_show:

            // enfermedad_edit
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_enfermedad_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_edit')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::editAction',));
            }
            not_enfermedad_edit:

            // enfermedad_update
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_enfermedad_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_update')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::updateAction',));
            }
            not_enfermedad_update:

            // enfermedad_delete
            if (preg_match('#^/enfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_enfermedad_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'enfermedad_delete')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\EnfermedadController::deleteAction',));
            }
            not_enfermedad_delete:

        }

        if (0 === strpos($pathinfo, '/protocolo')) {
            // protocolo
            if (rtrim($pathinfo, '/') === '/protocolo') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_protocolo;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'protocolo');
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::indexAction',  '_route' => 'protocolo',);
            }
            not_protocolo:

            // protocolo_create
            if ($pathinfo === '/protocolo/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_protocolo_create;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::createAction',  '_route' => 'protocolo_create',);
            }
            not_protocolo_create:

            // protocolo_new
            if ($pathinfo === '/protocolo/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_protocolo_new;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::newAction',  '_route' => 'protocolo_new',);
            }
            not_protocolo_new:

            // protocolo_show
            if (preg_match('#^/protocolo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_protocolo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'protocolo_show')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::showAction',));
            }
            not_protocolo_show:

            // protocolo_edit
            if (preg_match('#^/protocolo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_protocolo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'protocolo_edit')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::editAction',));
            }
            not_protocolo_edit:

            // protocolo_update
            if (preg_match('#^/protocolo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_protocolo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'protocolo_update')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::updateAction',));
            }
            not_protocolo_update:

            // protocolo_delete
            if (preg_match('#^/protocolo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_protocolo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'protocolo_delete')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\ProtocoloController::deleteAction',));
            }
            not_protocolo_delete:

        }

        if (0 === strpos($pathinfo, '/tratamiento')) {
            // tratamiento
            if (rtrim($pathinfo, '/') === '/tratamiento') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tratamiento;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tratamiento');
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::indexAction',  '_route' => 'tratamiento',);
            }
            not_tratamiento:

            // tratamiento_create
            if ($pathinfo === '/tratamiento/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tratamiento_create;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::createAction',  '_route' => 'tratamiento_create',);
            }
            not_tratamiento_create:

            // tratamiento_new
            if ($pathinfo === '/tratamiento/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tratamiento_new;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::newAction',  '_route' => 'tratamiento_new',);
            }
            not_tratamiento_new:

            // tratamiento_show
            if (preg_match('#^/tratamiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tratamiento_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamiento_show')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::showAction',));
            }
            not_tratamiento_show:

            // tratamiento_edit
            if (preg_match('#^/tratamiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tratamiento_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamiento_edit')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::editAction',));
            }
            not_tratamiento_edit:

            // tratamiento_update
            if (preg_match('#^/tratamiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_tratamiento_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamiento_update')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::updateAction',));
            }
            not_tratamiento_update:

            // tratamiento_delete
            if (preg_match('#^/tratamiento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tratamiento_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamiento_delete')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\TratamientoController::deleteAction',));
            }
            not_tratamiento_delete:

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }
            not_usuario:

            // usuario_create
            if ($pathinfo === '/usuario/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_new;
                }

                return array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }
            not_usuario_new:

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::showAction',));
            }
            not_usuario_show:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_usuario_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::editAction',));
            }
            not_usuario_edit:

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'AngelesVida\\DataBaseBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        // modulo_doctores_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulo_doctores_homepage')), array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/d')) {
            // dInicio
            if ($pathinfo === '/dInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dInicio',);
            }

            // dProtocolos
            if ($pathinfo === '/dProtocolos') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dProtocolosAction',  '_route' => 'dProtocolos',);
            }

            // dArticulos
            if ($pathinfo === '/dArticulos') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dArticulosAction',  '_route' => 'dArticulos',);
            }

            // dHorarios
            if ($pathinfo === '/dHorarios') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dHorariosAction',  '_route' => 'dHorarios',);
            }

            // dDescargarHorario
            if ($pathinfo === '/dDescargarHorario') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dDescargarHorarioAction',  '_route' => 'dDescargarHorario',);
            }

            // dNuevoArticuloDoc
            if ($pathinfo === '/dNuevoArticuloDoc') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dNuevoArticuloDocAction',  '_route' => 'dNuevoArticuloDoc',);
            }

            // dEliminarArticulo
            if ($pathinfo === '/dEliminarArticulo') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dEliminarArticuloAction',  '_route' => 'dEliminarArticulo',);
            }

            // dDescargarArticulo
            if ($pathinfo === '/dDescargarArticulo') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dDescargarArticuloAction',  '_route' => 'dDescargarArticulo',);
            }

            // dNuevoArticuloLink
            if ($pathinfo === '/dNuevoArticuloLink') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dNuevoArticuloLinkAction',  '_route' => 'dNuevoArticuloLink',);
            }

            // dVerArticulo
            if ($pathinfo === '/dVerArticulo') {
                return array (  '_controller' => 'AngelesVida\\ModuloDoctoresBundle\\Controller\\DefaultController::dVerArticuloAction',  '_route' => 'dVerArticulo',);
            }

        }

        // modulo_residentes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulo_residentes_homepage')), array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/r')) {
            // rInicio
            if ($pathinfo === '/rInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::rInicioAction',  '_route' => 'rInicio',);
            }

            // rArticulos
            if ($pathinfo === '/rArticulos') {
                return array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::rArticulosAction',  '_route' => 'rArticulos',);
            }

            // rHorarios
            if ($pathinfo === '/rHorarios') {
                return array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::rHorariosAction',  '_route' => 'rHorarios',);
            }

            if (0 === strpos($pathinfo, '/rDescargar')) {
                // rDescargarArticulo
                if ($pathinfo === '/rDescargarArticulo') {
                    return array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::rDescargarArticuloAction',  '_route' => 'rDescargarArticulo',);
                }

                // rDescargarHorario
                if ($pathinfo === '/rDescargarHorario') {
                    return array (  '_controller' => 'AngelesVida\\ModuloResidentesBundle\\Controller\\DefaultController::rDescargarHorarioAction',  '_route' => 'rDescargarHorario',);
                }

            }

        }

        // modulo_administrador_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modulo_administrador_homepage')), array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // aInicio
            if ($pathinfo === '/aInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aInicioAction',  '_route' => 'aInicio',);
            }

            // aDocumentos
            if ($pathinfo === '/aDocumentos') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aDocumentosAction',  '_route' => 'aDocumentos',);
            }

            // aActividades
            if ($pathinfo === '/aActividades') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aActividadesAction',  '_route' => 'aActividades',);
            }

            // aCuentas
            if ($pathinfo === '/aCuentas') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aCuentasAction',  '_route' => 'aCuentas',);
            }

            // aEditarInicio
            if ($pathinfo === '/aEditarInicio') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aEditarInicioAction',  '_route' => 'aEditarInicio',);
            }

            if (0 === strpos($pathinfo, '/aSubir')) {
                // aSubirHorario
                if ($pathinfo === '/aSubirHorario') {
                    return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aSubirHorarioAction',  '_route' => 'aSubirHorario',);
                }

                // aSubirImagen
                if ($pathinfo === '/aSubirImagen') {
                    return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aSubirImagenAction',  '_route' => 'aSubirImagen',);
                }

            }

            // aMantHorario
            if ($pathinfo === '/aMantHorario') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aMantHorarioAction',  '_route' => 'aMantHorario',);
            }

            // aBorrarHorario
            if ($pathinfo === '/aBorrarHorario') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aBorrarHorarioAction',  '_route' => 'aBorrarHorario',);
            }

            // aDescargarHorario
            if ($pathinfo === '/aDescargarHorario') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aDescargarHorarioAction',  '_route' => 'aDescargarHorario',);
            }

            // aMantGaleria
            if ($pathinfo === '/aMantGaleria') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aMantenimientoGaleriaAction',  '_route' => 'aMantGaleria',);
            }

            // aEliminarImagen
            if ($pathinfo === '/aEliminarImagen') {
                return array (  '_controller' => 'AngelesVida\\ModuloAdministradorBundle\\Controller\\DefaultController::aEliminarImagenAction',  '_route' => 'aEliminarImagen',);
            }

        }

        // angeles_vida_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'angeles_vida_homepage')), array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::indexAction',));
        }

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'inicio',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // cerrar_sesion
        if ($pathinfo === '/cerrarSesion') {
            return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'cerrar_sesion',);
        }

        // administrador
        if ($pathinfo === '/administrador') {
            return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\AdministradorController::inicioAction',  '_route' => 'administrador',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // pActividades
            if ($pathinfo === '/pActividades') {
                return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::pActividadesAction',  '_route' => 'pActividades',);
            }

            // pTemasDeInteres
            if ($pathinfo === '/pTemasDeInteres') {
                return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::pTemasDeInteresAction',  '_route' => 'pTemasDeInteres',);
            }

            // pQuienesSomos
            if ($pathinfo === '/pQuienesSomos') {
                return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::pQuienesSomosAction',  '_route' => 'pQuienesSomos',);
            }

            // galeria
            if ($pathinfo === '/pGaleria') {
                return array (  '_controller' => 'AngelesVida\\AngelesVidaBundle\\Controller\\DefaultController::pGaleriaAction',  '_route' => 'galeria',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
