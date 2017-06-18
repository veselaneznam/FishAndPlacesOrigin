<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.helper.dynamic' => 'getAssetic_Helper_DynamicService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.default_clearer' => 'getCache_DefaultClearerService',
            'cache.system' => 'getCache_SystemService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'debug.templating.engine.php' => 'getDebug_Templating_Engine_PhpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fish_and_places.cms_page_query_service' => 'getFishAndPlaces_CmsPageQueryServiceService',
            'fish_and_places.cms_page_repository' => 'getFishAndPlaces_CmsPageRepositoryService',
            'fish_and_places.cms_page_service' => 'getFishAndPlaces_CmsPageServiceService',
            'fish_and_places.dam_image_repository' => 'getFishAndPlaces_DamImageRepositoryService',
            'fish_and_places.dam_images_query_service' => 'getFishAndPlaces_DamImagesQueryServiceService',
            'fish_and_places.dam_query_service' => 'getFishAndPlaces_DamQueryServiceService',
            'fish_and_places.dam_repository' => 'getFishAndPlaces_DamRepositoryService',
            'fish_and_places.dam_service' => 'getFishAndPlaces_DamServiceService',
            'fish_and_places.fish_query_service' => 'getFishAndPlaces_FishQueryServiceService',
            'fish_and_places.fish_repository' => 'getFishAndPlaces_FishRepositoryService',
            'fish_and_places.fish_service' => 'getFishAndPlaces_FishServiceService',
            'fish_and_places.geocoder_proxy' => 'getFishAndPlaces_GeocoderProxyService',
            'fish_and_places.geolocator' => 'getFishAndPlaces_GeolocatorService',
            'fish_and_places.images_uploader' => 'getFishAndPlaces_ImagesUploaderService',
            'fish_and_places.local_geocoder_repository' => 'getFishAndPlaces_LocalGeocoderRepositoryService',
            'fish_and_places.user_repository' => 'getFishAndPlaces_UserRepositoryService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'http_kernel' => 'getHttpKernelService',
            'ivory.google_map.form.type.place_autocomplete' => 'getIvory_GoogleMap_Form_Type_PlaceAutocompleteService',
            'ivory.google_map.helper.api' => 'getIvory_GoogleMap_Helper_ApiService',
            'ivory.google_map.helper.api.event_dispatcher' => 'getIvory_GoogleMap_Helper_Api_EventDispatcherService',
            'ivory.google_map.helper.collector.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Base_BoundService',
            'ivory.google_map.helper.collector.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Base_CoordinateService',
            'ivory.google_map.helper.collector.base.point' => 'getIvory_GoogleMap_Helper_Collector_Base_PointService',
            'ivory.google_map.helper.collector.base.size' => 'getIvory_GoogleMap_Helper_Collector_Base_SizeService',
            'ivory.google_map.helper.collector.control.custom' => 'getIvory_GoogleMap_Helper_Collector_Control_CustomService',
            'ivory.google_map.helper.collector.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventService',
            'ivory.google_map.helper.collector.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.event.event' => 'getIvory_GoogleMap_Helper_Collector_Event_EventService',
            'ivory.google_map.helper.collector.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Event_EventOnceService',
            'ivory.google_map.helper.collector.layer.geo_json' => 'getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService',
            'ivory.google_map.helper.collector.layer.heatmap' => 'getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService',
            'ivory.google_map.helper.collector.layer.kml' => 'getIvory_GoogleMap_Helper_Collector_Layer_KmlService',
            'ivory.google_map.helper.collector.overlay.circle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_CircleService',
            'ivory.google_map.helper.collector.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.collector.overlay.extendable' => 'getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService',
            'ivory.google_map.helper.collector.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService',
            'ivory.google_map.helper.collector.overlay.icon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconService',
            'ivory.google_map.helper.collector.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService',
            'ivory.google_map.helper.collector.overlay.info_box' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService',
            'ivory.google_map.helper.collector.overlay.info_window' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService',
            'ivory.google_map.helper.collector.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.collector.overlay.marker' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService',
            'ivory.google_map.helper.collector.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService',
            'ivory.google_map.helper.collector.overlay.polygon' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService',
            'ivory.google_map.helper.collector.overlay.polyline' => 'getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService',
            'ivory.google_map.helper.collector.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService',
            'ivory.google_map.helper.collector.overlay.symbol' => 'getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService',
            'ivory.google_map.helper.collector.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.collector.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.collector.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService',
            'ivory.google_map.helper.collector.static.extendable' => 'getIvory_GoogleMap_Helper_Collector_Static_ExtendableService',
            'ivory.google_map.helper.collector.static.marker' => 'getIvory_GoogleMap_Helper_Collector_Static_MarkerService',
            'ivory.google_map.helper.collector.static.polyline' => 'getIvory_GoogleMap_Helper_Collector_Static_PolylineService',
            'ivory.google_map.helper.formatter' => 'getIvory_GoogleMap_Helper_FormatterService',
            'ivory.google_map.helper.json_builder' => 'getIvory_GoogleMap_Helper_JsonBuilderService',
            'ivory.google_map.helper.map' => 'getIvory_GoogleMap_Helper_MapService',
            'ivory.google_map.helper.map.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_EventDispatcherService',
            'ivory.google_map.helper.map.static' => 'getIvory_GoogleMap_Helper_Map_StaticService',
            'ivory.google_map.helper.map.static.event_dispatcher' => 'getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService',
            'ivory.google_map.helper.place_autocomplete' => 'getIvory_GoogleMap_Helper_PlaceAutocompleteService',
            'ivory.google_map.helper.place_autocomplete.event_dispatcher' => 'getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService',
            'ivory.google_map.helper.renderer.api' => 'getIvory_GoogleMap_Helper_Renderer_ApiService',
            'ivory.google_map.helper.renderer.api_init' => 'getIvory_GoogleMap_Helper_Renderer_ApiInitService',
            'ivory.google_map.helper.renderer.base.bound' => 'getIvory_GoogleMap_Helper_Renderer_Base_BoundService',
            'ivory.google_map.helper.renderer.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService',
            'ivory.google_map.helper.renderer.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Base_PointService',
            'ivory.google_map.helper.renderer.base.size' => 'getIvory_GoogleMap_Helper_Renderer_Base_SizeService',
            'ivory.google_map.helper.renderer.control.custom' => 'getIvory_GoogleMap_Helper_Renderer_Control_CustomService',
            'ivory.google_map.helper.renderer.control.fullscreen' => 'getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService',
            'ivory.google_map.helper.renderer.control.manager' => 'getIvory_GoogleMap_Helper_Renderer_Control_ManagerService',
            'ivory.google_map.helper.renderer.control.map_type' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService',
            'ivory.google_map.helper.renderer.control.map_type_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService',
            'ivory.google_map.helper.renderer.control.position' => 'getIvory_GoogleMap_Helper_Renderer_Control_PositionService',
            'ivory.google_map.helper.renderer.control.rotate' => 'getIvory_GoogleMap_Helper_Renderer_Control_RotateService',
            'ivory.google_map.helper.renderer.control.scale' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleService',
            'ivory.google_map.helper.renderer.control.scale_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService',
            'ivory.google_map.helper.renderer.control.street_view' => 'getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService',
            'ivory.google_map.helper.renderer.control.zoom' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomService',
            'ivory.google_map.helper.renderer.control.zoom_style' => 'getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService',
            'ivory.google_map.helper.renderer.event.dom_event' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventService',
            'ivory.google_map.helper.renderer.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService',
            'ivory.google_map.helper.renderer.event.event' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventService',
            'ivory.google_map.helper.renderer.event.event_once' => 'getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService',
            'ivory.google_map.helper.renderer.geometry.encoding' => 'getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService',
            'ivory.google_map.helper.renderer.html.javascript_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService',
            'ivory.google_map.helper.renderer.html.stylesheet' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService',
            'ivory.google_map.helper.renderer.html.stylesheet_tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService',
            'ivory.google_map.helper.renderer.html.tag' => 'getIvory_GoogleMap_Helper_Renderer_Html_TagService',
            'ivory.google_map.helper.renderer.layer.geo_json' => 'getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService',
            'ivory.google_map.helper.renderer.layer.heatmap' => 'getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService',
            'ivory.google_map.helper.renderer.layer.kml' => 'getIvory_GoogleMap_Helper_Renderer_Layer_KmlService',
            'ivory.google_map.helper.renderer.loader' => 'getIvory_GoogleMap_Helper_Renderer_LoaderService',
            'ivory.google_map.helper.renderer.map' => 'getIvory_GoogleMap_Helper_Renderer_MapService',
            'ivory.google_map.helper.renderer.map_bound' => 'getIvory_GoogleMap_Helper_Renderer_MapBoundService',
            'ivory.google_map.helper.renderer.map_center' => 'getIvory_GoogleMap_Helper_Renderer_MapCenterService',
            'ivory.google_map.helper.renderer.map_container' => 'getIvory_GoogleMap_Helper_Renderer_MapContainerService',
            'ivory.google_map.helper.renderer.map_html' => 'getIvory_GoogleMap_Helper_Renderer_MapHtmlService',
            'ivory.google_map.helper.renderer.map_type_id' => 'getIvory_GoogleMap_Helper_Renderer_MapTypeIdService',
            'ivory.google_map.helper.renderer.overlay.animation' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService',
            'ivory.google_map.helper.renderer.overlay.circle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService',
            'ivory.google_map.helper.renderer.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.overlay.extendable.bounds' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService',
            'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService',
            'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService',
            'ivory.google_map.helper.renderer.overlay.extendable.path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService',
            'ivory.google_map.helper.renderer.overlay.extendable.position' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService',
            'ivory.google_map.helper.renderer.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService',
            'ivory.google_map.helper.renderer.overlay.icon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconService',
            'ivory.google_map.helper.renderer.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService',
            'ivory.google_map.helper.renderer.overlay.info_box' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService',
            'ivory.google_map.helper.renderer.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.renderer.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.renderer.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.renderer.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService',
            'ivory.google_map.helper.renderer.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService',
            'ivory.google_map.helper.renderer.overlay.polygon' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService',
            'ivory.google_map.helper.renderer.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService',
            'ivory.google_map.helper.renderer.overlay.symbol' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService',
            'ivory.google_map.helper.renderer.overlay.symbol_path' => 'getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService',
            'ivory.google_map.helper.renderer.place.autocomplete' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService',
            'ivory.google_map.helper.renderer.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService',
            'ivory.google_map.helper.renderer.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.renderer.static.base.coordinate' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService',
            'ivory.google_map.helper.renderer.static.base.point' => 'getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService',
            'ivory.google_map.helper.renderer.static.overlay.extendable' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService',
            'ivory.google_map.helper.renderer.static.overlay.marker' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService',
            'ivory.google_map.helper.renderer.static.overlay.marker.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.marker.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService',
            'ivory.google_map.helper.renderer.static.overlay.polyline' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.location' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService',
            'ivory.google_map.helper.renderer.static.overlay.polyline.style' => 'getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService',
            'ivory.google_map.helper.renderer.static.size' => 'getIvory_GoogleMap_Helper_Renderer_Static_SizeService',
            'ivory.google_map.helper.renderer.utility.callback' => 'getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService',
            'ivory.google_map.helper.renderer.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService',
            'ivory.google_map.helper.renderer.utility.requirement' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService',
            'ivory.google_map.helper.renderer.utility.requirement_loader' => 'getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService',
            'ivory.google_map.helper.renderer.utility.source' => 'getIvory_GoogleMap_Helper_Renderer_Utility_SourceService',
            'ivory.google_map.helper.subscriber.api_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService',
            'ivory.google_map.helper.subscriber.base' => 'getIvory_GoogleMap_Helper_Subscriber_BaseService',
            'ivory.google_map.helper.subscriber.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Base_BoundService',
            'ivory.google_map.helper.subscriber.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.base.point' => 'getIvory_GoogleMap_Helper_Subscriber_Base_PointService',
            'ivory.google_map.helper.subscriber.base.size' => 'getIvory_GoogleMap_Helper_Subscriber_Base_SizeService',
            'ivory.google_map.helper.subscriber.control' => 'getIvory_GoogleMap_Helper_Subscriber_ControlService',
            'ivory.google_map.helper.subscriber.control.custom' => 'getIvory_GoogleMap_Helper_Subscriber_Control_CustomService',
            'ivory.google_map.helper.subscriber.event' => 'getIvory_GoogleMap_Helper_Subscriber_EventService',
            'ivory.google_map.helper.subscriber.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService',
            'ivory.google_map.helper.subscriber.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventService',
            'ivory.google_map.helper.subscriber.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.layer' => 'getIvory_GoogleMap_Helper_Subscriber_LayerService',
            'ivory.google_map.helper.subscriber.layer.geo_json' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService',
            'ivory.google_map.helper.subscriber.layer.heatmap' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService',
            'ivory.google_map.helper.subscriber.layer.kml' => 'getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService',
            'ivory.google_map.helper.subscriber.map' => 'getIvory_GoogleMap_Helper_Subscriber_MapService',
            'ivory.google_map.helper.subscriber.map_bound' => 'getIvory_GoogleMap_Helper_Subscriber_MapBoundService',
            'ivory.google_map.helper.subscriber.map_center' => 'getIvory_GoogleMap_Helper_Subscriber_MapCenterService',
            'ivory.google_map.helper.subscriber.map_container' => 'getIvory_GoogleMap_Helper_Subscriber_MapContainerService',
            'ivory.google_map.helper.subscriber.map_html' => 'getIvory_GoogleMap_Helper_Subscriber_MapHtmlService',
            'ivory.google_map.helper.subscriber.map_init' => 'getIvory_GoogleMap_Helper_Subscriber_MapInitService',
            'ivory.google_map.helper.subscriber.map_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService',
            'ivory.google_map.helper.subscriber.map_stylehseet' => 'getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService',
            'ivory.google_map.helper.subscriber.overlay' => 'getIvory_GoogleMap_Helper_Subscriber_OverlayService',
            'ivory.google_map.helper.subscriber.overlay.circle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService',
            'ivory.google_map.helper.subscriber.overlay.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.overlay.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService',
            'ivory.google_map.helper.subscriber.overlay.ground_overlay' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService',
            'ivory.google_map.helper.subscriber.overlay.icon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService',
            'ivory.google_map.helper.subscriber.overlay.icon_sequence' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService',
            'ivory.google_map.helper.subscriber.overlay.info_box' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService',
            'ivory.google_map.helper.subscriber.overlay.info_window.close' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService',
            'ivory.google_map.helper.subscriber.overlay.info_window.default' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService',
            'ivory.google_map.helper.subscriber.overlay.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService',
            'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService',
            'ivory.google_map.helper.subscriber.overlay.marker_clusterer' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService',
            'ivory.google_map.helper.subscriber.overlay.marker_shape' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService',
            'ivory.google_map.helper.subscriber.overlay.polygon' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService',
            'ivory.google_map.helper.subscriber.overlay.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService',
            'ivory.google_map.helper.subscriber.overlay.rectangle' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService',
            'ivory.google_map.helper.subscriber.overlay.symbol' => 'getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService',
            'ivory.google_map.helper.subscriber.place.autocomplete' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService',
            'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService',
            'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' => 'getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService',
            'ivory.google_map.helper.subscriber.place.autocomplete_container' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService',
            'ivory.google_map.helper.subscriber.place.autocomplete_html' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService',
            'ivory.google_map.helper.subscriber.place.autocomplete_init' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService',
            'ivory.google_map.helper.subscriber.place.autocomplete_javascript' => 'getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService',
            'ivory.google_map.helper.subscriber.static' => 'getIvory_GoogleMap_Helper_Subscriber_StaticService',
            'ivory.google_map.helper.subscriber.static.center' => 'getIvory_GoogleMap_Helper_Subscriber_Static_CenterService',
            'ivory.google_map.helper.subscriber.static.encoded_polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService',
            'ivory.google_map.helper.subscriber.static.extendable' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService',
            'ivory.google_map.helper.subscriber.static.format' => 'getIvory_GoogleMap_Helper_Subscriber_Static_FormatService',
            'ivory.google_map.helper.subscriber.static.key' => 'getIvory_GoogleMap_Helper_Subscriber_Static_KeyService',
            'ivory.google_map.helper.subscriber.static.marker' => 'getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService',
            'ivory.google_map.helper.subscriber.static.polyline' => 'getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService',
            'ivory.google_map.helper.subscriber.static.scale' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService',
            'ivory.google_map.helper.subscriber.static.size' => 'getIvory_GoogleMap_Helper_Subscriber_Static_SizeService',
            'ivory.google_map.helper.subscriber.static.type' => 'getIvory_GoogleMap_Helper_Subscriber_Static_TypeService',
            'ivory.google_map.helper.subscriber.static.zoom' => 'getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService',
            'ivory.google_map.helper.subscriber.utility.object_to_array' => 'getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService',
            'ivory.google_map.templating.api' => 'getIvory_GoogleMap_Templating_ApiService',
            'ivory.google_map.templating.map' => 'getIvory_GoogleMap_Templating_MapService',
            'ivory.google_map.templating.map.static' => 'getIvory_GoogleMap_Templating_Map_StaticService',
            'ivory.google_map.templating.place_autocomplete' => 'getIvory_GoogleMap_Templating_PlaceAutocompleteService',
            'ivory.google_map.twig.extension.api' => 'getIvory_GoogleMap_Twig_Extension_ApiService',
            'ivory.google_map.twig.extension.map' => 'getIvory_GoogleMap_Twig_Extension_MapService',
            'ivory.google_map.twig.extension.map.static' => 'getIvory_GoogleMap_Twig_Extension_Map_StaticService',
            'ivory.google_map.twig.extension.place_autocomplete' => 'getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService',
            'ivory.serializer' => 'getIvory_SerializerService',
            'ivory.serializer.accessor' => 'getIvory_Serializer_AccessorService',
            'ivory.serializer.event.dispatcher' => 'getIvory_Serializer_Event_DispatcherService',
            'ivory.serializer.instantiator' => 'getIvory_Serializer_InstantiatorService',
            'ivory.serializer.mapping.factory.default' => 'getIvory_Serializer_Mapping_Factory_DefaultService',
            'ivory.serializer.mapping.factory.event' => 'getIvory_Serializer_Mapping_Factory_EventService',
            'ivory.serializer.mapping.loader' => 'getIvory_Serializer_Mapping_LoaderService',
            'ivory.serializer.mapping.loader.annotation' => 'getIvory_Serializer_Mapping_Loader_AnnotationService',
            'ivory.serializer.mapping.loader.reflection' => 'getIvory_Serializer_Mapping_Loader_ReflectionService',
            'ivory.serializer.mutator' => 'getIvory_Serializer_MutatorService',
            'ivory.serializer.navigator.default' => 'getIvory_Serializer_Navigator_DefaultService',
            'ivory.serializer.navigator.event' => 'getIvory_Serializer_Navigator_EventService',
            'ivory.serializer.registry.type' => 'getIvory_Serializer_Registry_TypeService',
            'ivory.serializer.registry.visitor' => 'getIvory_Serializer_Registry_VisitorService',
            'ivory.serializer.type.array' => 'getIvory_Serializer_Type_ArrayService',
            'ivory.serializer.type.boolean' => 'getIvory_Serializer_Type_BooleanService',
            'ivory.serializer.type.closure' => 'getIvory_Serializer_Type_ClosureService',
            'ivory.serializer.type.date_time' => 'getIvory_Serializer_Type_DateTimeService',
            'ivory.serializer.type.exception' => 'getIvory_Serializer_Type_ExceptionService',
            'ivory.serializer.type.float' => 'getIvory_Serializer_Type_FloatService',
            'ivory.serializer.type.form' => 'getIvory_Serializer_Type_FormService',
            'ivory.serializer.type.form_error' => 'getIvory_Serializer_Type_FormErrorService',
            'ivory.serializer.type.guesser' => 'getIvory_Serializer_Type_GuesserService',
            'ivory.serializer.type.integer' => 'getIvory_Serializer_Type_IntegerService',
            'ivory.serializer.type.lexer' => 'getIvory_Serializer_Type_LexerService',
            'ivory.serializer.type.null' => 'getIvory_Serializer_Type_NullService',
            'ivory.serializer.type.object' => 'getIvory_Serializer_Type_ObjectService',
            'ivory.serializer.type.parser' => 'getIvory_Serializer_Type_ParserService',
            'ivory.serializer.type.resource' => 'getIvory_Serializer_Type_ResourceService',
            'ivory.serializer.type.std_class' => 'getIvory_Serializer_Type_StdClassService',
            'ivory.serializer.type.string' => 'getIvory_Serializer_Type_StringService',
            'ivory.serializer.visitor.csv.deserialization' => 'getIvory_Serializer_Visitor_Csv_DeserializationService',
            'ivory.serializer.visitor.csv.serialization' => 'getIvory_Serializer_Visitor_Csv_SerializationService',
            'ivory.serializer.visitor.json.deserialization' => 'getIvory_Serializer_Visitor_Json_DeserializationService',
            'ivory.serializer.visitor.json.serialization' => 'getIvory_Serializer_Visitor_Json_SerializationService',
            'ivory.serializer.visitor.xml.deserialization' => 'getIvory_Serializer_Visitor_Xml_DeserializationService',
            'ivory.serializer.visitor.xml.serialization' => 'getIvory_Serializer_Visitor_Xml_SerializationService',
            'ivory.serializer.visitor.yaml.deserialization' => 'getIvory_Serializer_Visitor_Yaml_DeserializationService',
            'ivory.serializer.visitor.yaml.serialization' => 'getIvory_Serializer_Visitor_Yaml_SerializationService',
            'ivory_ck_editor.config_manager' => 'getIvoryCkEditor_ConfigManagerService',
            'ivory_ck_editor.form.type' => 'getIvoryCkEditor_Form_TypeService',
            'ivory_ck_editor.plugin_manager' => 'getIvoryCkEditor_PluginManagerService',
            'ivory_ck_editor.renderer' => 'getIvoryCkEditor_RendererService',
            'ivory_ck_editor.renderer.json_builder' => 'getIvoryCkEditor_Renderer_JsonBuilderService',
            'ivory_ck_editor.styles_set_manager' => 'getIvoryCkEditor_StylesSetManagerService',
            'ivory_ck_editor.template_manager' => 'getIvoryCkEditor_TemplateManagerService',
            'ivory_ck_editor.templating.helper' => 'getIvoryCkEditor_Templating_HelperService',
            'ivory_ck_editor.toolbar_manager' => 'getIvoryCkEditor_ToolbarManagerService',
            'ivory_ck_editor.twig_extension' => 'getIvoryCkEditor_TwigExtensionService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'star_rating.twig' => 'getStarRating_TwigService',
            'star_rating.type' => 'getStarRating_TypeService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.stopwatch' => 'getTemplating_Helper_StopwatchService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos_user.doctrine_registry' => 'doctrine',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'ivory.serializer.mapping.factory' => 'ivory.serializer.mapping.factory.default',
            'ivory.serializer.navigator' => 'ivory.serializer.navigator.event',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create((__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the 'assetic.asset_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Assetic\Factory\LazyAssetManager A Assetic\Factory\LazyAssetManager instance
     */
    protected function getAssetic_AssetManagerService()
    {
        $a = ${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'};
        $b = $this->get('templating.loader');

        $c = new \Assetic\Cache\ConfigCache((__DIR__.'/assetic/config'));

        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($a, array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig'), $this->get('monolog.logger.assetic', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $c, true), 'php' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Symfony\Bundle\AsseticBundle\Factory\Loader\AsseticHelperFormulaLoader($a), $c, true)));

        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[3].'/app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[3].'/app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FrameworkBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[3].'/app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[3].'/app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SecurityBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[3].'/app/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[3].'/app/Resources/TwigBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'TwigBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[3].'/app/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[3].'/app/Resources/MonologBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'MonologBundle', ($this->targetDirs[3].'/vendor/symfony/monolog-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[3].'/app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[3].'/app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SwiftmailerBundle', ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[3].'/app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', ($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', ($this->targetDirs[3].'/app/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'FOSUserBundle', ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/app/Resources/DoctrineMigrationsBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/app/Resources/DoctrineMigrationsBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DoctrineMigrationsBundle', ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryGoogleMapBundle', ($this->targetDirs[3].'/app/Resources/IvoryGoogleMapBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryGoogleMapBundle', ($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryGoogleMapBundle', ($this->targetDirs[3].'/app/Resources/IvoryGoogleMapBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryGoogleMapBundle', ($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvorySerializerBundle', ($this->targetDirs[3].'/app/Resources/IvorySerializerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvorySerializerBundle', ($this->targetDirs[3].'/vendor/egeloen/serializer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvorySerializerBundle', ($this->targetDirs[3].'/app/Resources/IvorySerializerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvorySerializerBundle', ($this->targetDirs[3].'/vendor/egeloen/serializer-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[3].'/app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[3].'/app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AsseticBundle', ($this->targetDirs[3].'/vendor/symfony/assetic-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/app/Resources/IvoryCKEditorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/app/Resources/IvoryCKEditorBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'IvoryCKEditorBundle', ($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StarRatingBundle', ($this->targetDirs[3].'/app/Resources/StarRatingBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StarRatingBundle', ($this->targetDirs[3].'/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StarRatingBundle', ($this->targetDirs[3].'/app/Resources/StarRatingBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'StarRatingBundle', ($this->targetDirs[3].'/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'GoGreenBundle', ($this->targetDirs[3].'/app/Resources/GoGreenBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'GoGreenBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'GoGreenBundle', ($this->targetDirs[3].'/app/Resources/GoGreenBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'GoGreenBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'ShopBundle', ($this->targetDirs[3].'/app/Resources/ShopBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'ShopBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'ShopBundle', ($this->targetDirs[3].'/app/Resources/ShopBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'ShopBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AdminBundle', ($this->targetDirs[3].'/app/Resources/AdminBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AdminBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AdminBundle', ($this->targetDirs[3].'/app/Resources/AdminBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'AdminBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'UserBundle', ($this->targetDirs[3].'/app/Resources/UserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'UserBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'UserBundle', ($this->targetDirs[3].'/app/Resources/UserBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'UserBundle', ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DebugBundle', ($this->targetDirs[3].'/app/Resources/DebugBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DebugBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DebugBundle', ($this->targetDirs[3].'/app/Resources/DebugBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'DebugBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', ($this->targetDirs[3].'/app/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', ($this->targetDirs[3].'/app/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'WebProfilerBundle', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', ($this->targetDirs[3].'/app/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', ($this->targetDirs[3].'/app/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioDistributionBundle', ($this->targetDirs[3].'/vendor/sensio/distribution-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[3].'/app/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/views'), '/\\.[^.]+\\.twig$/'))), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource(array(0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[3].'/app/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.php$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, 'SensioGeneratorBundle', ($this->targetDirs[3].'/vendor/sensio/generator-bundle/Resources/views'), '/\\.[^.]+\\.php$/'))), 'php');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($b, '', ($this->targetDirs[3].'/app/Resources/views'), '/\\.[^.]+\\.php$/'), 'php');

        return $instance;
    }

    /**
     * Gets the 'assetic.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Controller\AsseticController A Symfony\Bundle\AsseticBundle\Controller\AsseticController instance
     */
    protected function getAssetic_ControllerService()
    {
        return $this->services['assetic.controller'] = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('assetic.asset_manager'), new \Assetic\Cache\FilesystemCache((__DIR__.'/assetic/assets')), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'assetic.filter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\FilterManager A Symfony\Bundle\AsseticBundle\FilterManager instance
     */
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array());
    }

    /**
     * Gets the 'assetic.helper.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper A Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper instance
     */
    protected function getAssetic_Helper_DynamicService()
    {
        return $this->services['assetic.helper.dynamic'] = new \Symfony\Bundle\AsseticBundle\Templating\DynamicAsseticHelper($this->get('templating.helper.router'), ${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the 'assetic.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener A Symfony\Bundle\AsseticBundle\EventListener\RequestListener instance
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'cache.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter A Symfony\Component\Cache\Adapter\FilesystemAdapter instance
     */
    protected function getCache_AppService()
    {
        $this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('BvRkf-mmd-', 0, (__DIR__.'/pools'));

        if ($this->has('monolog.logger.cache')) {
            $instance->setLogger($this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'cache.default_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer A Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer instance
     */
    protected function getCache_DefaultClearerService()
    {
        $this->services['cache.default_clearer'] = $instance = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer();

        $instance->addPool($this->get('cache.app'));
        $instance->addPool($this->get('cache.system'));
        $instance->addPool(${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'cache.system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('veIcCac5ka', 0, 'RZthqp0fzXGXk4buCSyHUB', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array(0 => $this->get('cache.default_clearer')));
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 5 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\AnnotationsCacheWarmer(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, (__DIR__.'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'}), 6 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 7 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ValidatorCacheWarmer($this->get('validator.builder'), (__DIR__.'/validation.php'), \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('nzpL4ncvOe', 0, 'RZthqp0fzXGXk4buCSyHUB', (__DIR__.'/pools'), $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE))), 8 => $this->get('kernel.class_cache.cache_warmer'), 9 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router'))));
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'), false);
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.argument_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver A Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver instance
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), array(0 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver(), 1 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver(), 2 => new \Symfony\Bundle\SecurityBundle\SecurityUserValueResolver($this->get('security.token_storage')), 3 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver(), 4 => new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'debug.templating.engine.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine A Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine instance
     */
    protected function getDebug_Templating_Engine_PhpService()
    {
        $this->services['debug.templating.engine.php'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\TimedPhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('debug.stopwatch'), $this->get('templating.globals'));

        $instance->setCharset('UTF-8');
        $instance->setHelpers(array('slots' => 'templating.helper.slots', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'assets' => 'templating.helper.assets', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'stopwatch' => 'templating.helper.stopwatch', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'ivory_ckeditor' => 'ivory_ck_editor.templating.helper'));

        return $instance;
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger(${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}));
        $c->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'fish_and_places', 'user' => 'root', 'password' => 123456, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver A Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {

            return $this->services['doctrine.orm.default_entity_manager'] = new DoctrineORMEntityManager_000000006446d9bb0000000013179ac9fbfcf4ab3fe097c1542a3189ffdd480d(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);

                    $proxy->setProxyInitializer(null);

                    return true;
                }
            );
        }

        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[3].'/src/FishAndPlaces/User/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\User\\Domain\\Model', ($this->targetDirs[3].'/src/FishAndPlaces/Core/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\Core\\Domain\\Model', ($this->targetDirs[3].'/src/FishAndPlaces/Shop/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\Shop\\Domain\\Model', ($this->targetDirs[3].'/src/FishAndPlaces/GreenObject/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\GreenObject\\Domain\\Model'));
        $a->setGlobalBasename('mapping');

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'FishAndPlaces\\User\\Domain\\Model');
        $b->addDriver($a, 'FishAndPlaces\\Core\\Domain\\Model');
        $b->addDriver($a, 'FishAndPlaces\\Shop\\Domain\\Model');
        $b->addDriver($a, 'FishAndPlaces\\GreenObject\\Domain\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('GoGreenBundle' => 'FishAndPlaces\\GreenObject\\Domain\\Model', 'ShopBundle' => 'FishAndPlaces\\Shop\\Domain\\Model'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(true);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $c);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_e5dc80357320f8d70c8568a2c260ec76b7193df9c9affcb18f949bbf800855a4');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_e5dc80357320f8d70c8568a2c260ec76b7193df9c9affcb18f949bbf800855a4');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_e5dc80357320f8d70c8568a2c260ec76b7193df9c9affcb18f949bbf800855a4');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'fish_and_places.cms_page_query_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\Core\Application\CmsPage\CmsPageQueryService A FishAndPlaces\Core\Application\CmsPage\CmsPageQueryService instance
     */
    protected function getFishAndPlaces_CmsPageQueryServiceService()
    {
        return $this->services['fish_and_places.cms_page_query_service'] = new \FishAndPlaces\Core\Application\CmsPage\CmsPageQueryService($this->get('fish_and_places.cms_page_repository'));
    }

    /**
     * Gets the 'fish_and_places.cms_page_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineCmsPageRepository A FishAndPlaces\Core\Infrastructure\Repository\Doctrine\ORM\DoctrineCmsPageRepository instance
     */
    protected function getFishAndPlaces_CmsPageRepositoryService()
    {
        return $this->services['fish_and_places.cms_page_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\Core\\Domain\\Model\\CmsPage');
    }

    /**
     * Gets the 'fish_and_places.cms_page_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\Core\Application\CmsPage\CmsPageService A FishAndPlaces\Core\Application\CmsPage\CmsPageService instance
     */
    protected function getFishAndPlaces_CmsPageServiceService()
    {
        return $this->services['fish_and_places.cms_page_service'] = new \FishAndPlaces\Core\Application\CmsPage\CmsPageService($this->get('fish_and_places.cms_page_repository'));
    }

    /**
     * Gets the 'fish_and_places.dam_image_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineGreenObjectImageRepository A FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineGreenObjectImageRepository instance
     */
    protected function getFishAndPlaces_DamImageRepositoryService()
    {
        return $this->services['fish_and_places.dam_image_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\GreenObject\\Domain\\Model\\DamImage');
    }

    /**
     * Gets the 'fish_and_places.dam_images_query_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\GreenObject\Image\GreenObjectImageQueryService A FishAndPlaces\GreenObject\Application\GreenObject\Image\GreenObjectImageQueryService instance
     */
    protected function getFishAndPlaces_DamImagesQueryServiceService()
    {
        return $this->services['fish_and_places.dam_images_query_service'] = new \FishAndPlaces\GreenObject\Application\GreenObject\Image\GreenObjectImageQueryService($this->get('fish_and_places.dam_image_repository'));
    }

    /**
     * Gets the 'fish_and_places.dam_query_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService A FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService instance
     */
    protected function getFishAndPlaces_DamQueryServiceService()
    {
        return $this->services['fish_and_places.dam_query_service'] = new \FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamQueryService($this->get('fish_and_places.dam_repository'), $this->get('fish_and_places.geolocator'));
    }

    /**
     * Gets the 'fish_and_places.dam_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineDamRepository A FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineDamRepository instance
     */
    protected function getFishAndPlaces_DamRepositoryService()
    {
        return $this->services['fish_and_places.dam_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\GreenObject\\Domain\\Model\\Dam');
    }

    /**
     * Gets the 'fish_and_places.dam_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamService A FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamService instance
     */
    protected function getFishAndPlaces_DamServiceService()
    {
        return $this->services['fish_and_places.dam_service'] = new \FishAndPlaces\GreenObject\Application\GreenObject\Dam\DamService($this->get('fish_and_places.dam_repository'), $this->get('fish_and_places.geolocator'), $this->get('fish_and_places.dam_image_repository'), $this->get('fish_and_places.fish_repository'));
    }

    /**
     * Gets the 'fish_and_places.fish_query_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\Fish\FishQueryService A FishAndPlaces\GreenObject\Application\Fish\FishQueryService instance
     */
    protected function getFishAndPlaces_FishQueryServiceService()
    {
        return $this->services['fish_and_places.fish_query_service'] = new \FishAndPlaces\GreenObject\Application\Fish\FishQueryService($this->get('fish_and_places.fish_repository'));
    }

    /**
     * Gets the 'fish_and_places.fish_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineFishRepository A FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineFishRepository instance
     */
    protected function getFishAndPlaces_FishRepositoryService()
    {
        return $this->services['fish_and_places.fish_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\GreenObject\\Domain\\Model\\Fish');
    }

    /**
     * Gets the 'fish_and_places.fish_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\Fish\FishService A FishAndPlaces\GreenObject\Application\Fish\FishService instance
     */
    protected function getFishAndPlaces_FishServiceService()
    {
        return $this->services['fish_and_places.fish_service'] = new \FishAndPlaces\GreenObject\Application\Fish\FishService($this->get('fish_and_places.fish_repository'));
    }

    /**
     * Gets the 'fish_and_places.geocoder_proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Infrastructure\Geocoder\GeocoderProxy A FishAndPlaces\GreenObject\Infrastructure\Geocoder\GeocoderProxy instance
     */
    protected function getFishAndPlaces_GeocoderProxyService()
    {
        return $this->services['fish_and_places.geocoder_proxy'] = new \FishAndPlaces\GreenObject\Infrastructure\Geocoder\GeocoderProxy();
    }

    /**
     * Gets the 'fish_and_places.geolocator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\Core\GeoLocatorService A FishAndPlaces\GreenObject\Application\Core\GeoLocatorService instance
     */
    protected function getFishAndPlaces_GeolocatorService()
    {
        return $this->services['fish_and_places.geolocator'] = new \FishAndPlaces\GreenObject\Application\Core\GeoLocatorService($this->get('fish_and_places.geocoder_proxy'), $this->get('fish_and_places.local_geocoder_repository'));
    }

    /**
     * Gets the 'fish_and_places.images_uploader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Application\Core\FileUploader A FishAndPlaces\GreenObject\Application\Core\FileUploader instance
     */
    protected function getFishAndPlaces_ImagesUploaderService()
    {
        return $this->services['fish_and_places.images_uploader'] = new \FishAndPlaces\GreenObject\Application\Core\FileUploader(($this->targetDirs[3].'/app/../web/uploads/images/'));
    }

    /**
     * Gets the 'fish_and_places.local_geocoder_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineGeocoderLocalRepository A FishAndPlaces\GreenObject\Infrastructure\Repository\Doctrine\ORM\DoctrineGeocoderLocalRepository instance
     */
    protected function getFishAndPlaces_LocalGeocoderRepositoryService()
    {
        return $this->services['fish_and_places.local_geocoder_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\GreenObject\\Domain\\Model\\Geocoder');
    }

    /**
     * Gets the 'fish_and_places.user_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FishAndPlaces\User\Infrastructure\Repository\Doctrine\ORM\DoctrineUserRepository A FishAndPlaces\User\Infrastructure\Repository\Doctrine\ORM\DoctrineUserRepository instance
     */
    protected function getFishAndPlaces_UserRepositoryService()
    {
        return $this->services['fish_and_places.user_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'Ivory\\GoogleMapBundle\\Form\\Type\\PlaceAutocompleteType' => 'ivory.google_map.form.type.place_autocomplete', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type', 'blackknight467\\StarRatingBundle\\Form\\RatingType' => 'star_rating.type'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.data_collector', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.upload.validator', 4 => 'form.type_extension.form.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     *
     * @deprecated The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_BirthdayService()
    {
        @trigger_error('The "form.type.birthday" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     *
     * @deprecated The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ButtonService()
    {
        @trigger_error('The "form.type.button" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     *
     * @deprecated The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CheckboxService()
    {
        @trigger_error('The "form.type.checkbox" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     *
     * @deprecated The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CollectionService()
    {
        @trigger_error('The "form.type.collection" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     *
     * @deprecated The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CountryService()
    {
        @trigger_error('The "form.type.country" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     *
     * @deprecated The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_CurrencyService()
    {
        @trigger_error('The "form.type.currency" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     *
     * @deprecated The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DateService()
    {
        @trigger_error('The "form.type.date" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     *
     * @deprecated The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_DatetimeService()
    {
        @trigger_error('The "form.type.datetime" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     *
     * @deprecated The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_EmailService()
    {
        @trigger_error('The "form.type.email" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     *
     * @deprecated The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_FileService()
    {
        @trigger_error('The "form.type.file" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     *
     * @deprecated The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_HiddenService()
    {
        @trigger_error('The "form.type.hidden" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     *
     * @deprecated The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_IntegerService()
    {
        @trigger_error('The "form.type.integer" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     *
     * @deprecated The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LanguageService()
    {
        @trigger_error('The "form.type.language" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     *
     * @deprecated The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_LocaleService()
    {
        @trigger_error('The "form.type.locale" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     *
     * @deprecated The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_MoneyService()
    {
        @trigger_error('The "form.type.money" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     *
     * @deprecated The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_NumberService()
    {
        @trigger_error('The "form.type.number" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     *
     * @deprecated The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PasswordService()
    {
        @trigger_error('The "form.type.password" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     *
     * @deprecated The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_PercentService()
    {
        @trigger_error('The "form.type.percent" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     *
     * @deprecated The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RadioService()
    {
        @trigger_error('The "form.type.radio" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     *
     * @deprecated The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RangeService()
    {
        @trigger_error('The "form.type.range" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     *
     * @deprecated The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_RepeatedService()
    {
        @trigger_error('The "form.type.repeated" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     *
     * @deprecated The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_ResetService()
    {
        @trigger_error('The "form.type.reset" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     *
     * @deprecated The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SearchService()
    {
        @trigger_error('The "form.type.search" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     *
     * @deprecated The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_SubmitService()
    {
        @trigger_error('The "form.type.submit" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     *
     * @deprecated The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextService()
    {
        @trigger_error('The "form.type.text" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     *
     * @deprecated The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TextareaService()
    {
        @trigger_error('The "form.type.textarea" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     *
     * @deprecated The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimeService()
    {
        @trigger_error('The "form.type.time" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     *
     * @deprecated The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_TimezoneService()
    {
        @trigger_error('The "form.type.timezone" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     *
     * @deprecated The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.
     */
    protected function getForm_Type_UrlService()
    {
        @trigger_error('The "form.type.url" service is deprecated since Symfony 3.1 and will be removed in 4.0.', E_USER_DEPRECATED);

        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', ${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'});
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(${($_ = isset($this->services['form.server_params']) ? $this->services['form.server_params'] : $this->getForm_ServerParamsService()) && false ?: '_'}));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_user.change_password.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.change_password.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType A FOS\UserBundle\Form\Type\ChangePasswordFormType instance
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'fos_user.listener.authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener A FOS\UserBundle\EventListener\AuthenticationListener instance
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the 'fos_user.listener.flash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener A FOS\UserBundle\EventListener\FlashListener instance
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the 'fos_user.listener.resetting' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener A FOS\UserBundle\EventListener\ResettingListener instance
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the 'fos_user.mailer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer A FOS\UserBundle\Mailer\Mailer instance
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('vesela.ferdinandova@gmail.com' => 'Vesela'), 'resetting' => array('vesela.ferdinandova@gmail.com' => 'Vesela'))));
    }

    /**
     * Gets the 'fos_user.profile.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.profile.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType A FOS\UserBundle\Form\Type\ProfileFormType instance
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'fos_user.registration.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.registration.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType A FOS\UserBundle\Form\Type\RegistrationFormType instance
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'fos_user.resetting.form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory A FOS\UserBundle\Form\Factory\FormFactory instance
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the 'fos_user.resetting.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType A FOS\UserBundle\Form\Type\ResettingFormType instance
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'fos_user.security.interactive_login_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener A FOS\UserBundle\EventListener\LastLoginListener instance
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.security.login_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Security\LoginManager A FOS\UserBundle\Security\LoginManager instance
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker.main'), ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'fos_user.user_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager A FOS\UserBundle\Doctrine\UserManager instance
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager(${($_ = isset($this->services['fos_user.util.password_updater']) ? $this->services['fos_user.util.password_updater'] : $this->getFosUser_Util_PasswordUpdaterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'}, $this->get('doctrine')->getManager(NULL), 'FishAndPlaces\\User\\Domain\\Model\\User');
    }

    /**
     * Gets the 'fos_user.username_form_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType A FOS\UserBundle\Form\Type\UsernameFormType instance
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the 'fos_user.util.email_canonicalizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer A FOS\UserBundle\Util\Canonicalizer instance
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the 'fos_user.util.token_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator A FOS\UserBundle\Util\TokenGenerator instance
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the 'fos_user.util.user_manipulator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator A FOS\UserBundle\Util\UserManipulator instance
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('debug.event_dispatcher'), $this->get('request_stack'));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('templating'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('debug.event_dispatcher'), $this->get('debug.controller_resolver'), $this->get('request_stack'), $this->get('debug.argument_resolver'));
    }

    /**
     * Gets the 'ivory.google_map.form.type.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType A Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType instance
     */
    protected function getIvory_GoogleMap_Form_Type_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.form.type.place_autocomplete'] = new \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType();
    }

    /**
     * Gets the 'ivory.google_map.helper.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\ApiHelper A Ivory\GoogleMap\Helper\ApiHelper instance
     */
    protected function getIvory_GoogleMap_Helper_ApiService()
    {
        return $this->services['ivory.google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper($this->get('ivory.google_map.helper.api.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.api.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Api_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.api.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.api_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\ApiJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector A Ivory\GoogleMap\Helper\Collector\Base\BoundCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector($this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector A Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector($this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.collector.layer.heatmap'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\PointCollector A Ivory\GoogleMap\Helper\Collector\Base\PointCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.collector.base.point'] = new \Ivory\GoogleMap\Helper\Collector\Base\PointCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector A Ivory\GoogleMap\Helper\Collector\Base\SizeCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.collector.base.size'] = new \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector($this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.icon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector A Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.collector.control.custom'] = new \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector A Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventCollector A Ivory\GoogleMap\Helper\Collector\Event\EventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector A Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector A Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.kml'] = new \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector A Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector A Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector A Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector A Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector A Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector A Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector($this->get('ivory.google_map.helper.collector.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector A Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_window' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector A Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector A Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector A Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector A Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector A Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector A Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector A Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector A Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector($this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector A Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector A Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector($this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.place.autocomplete.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector A Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector A Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector A Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.static.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector A Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.static.marker'] = new \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.collector.static.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector A Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector instance
     */
    protected function getIvory_GoogleMap_Helper_Collector_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector();
    }

    /**
     * Gets the 'ivory.google_map.helper.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Formatter\Formatter A Ivory\GoogleMap\Helper\Formatter\Formatter instance
     */
    protected function getIvory_GoogleMap_Helper_FormatterService()
    {
        return $this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter(true);
    }

    /**
     * Gets the 'ivory.google_map.helper.json_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder A Ivory\JsonBuilder\JsonBuilder instance
     */
    protected function getIvory_GoogleMap_Helper_JsonBuilderService()
    {
        return $this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder();
    }

    /**
     * Gets the 'ivory.google_map.helper.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\MapHelper A Ivory\GoogleMap\Helper\MapHelper instance
     */
    protected function getIvory_GoogleMap_Helper_MapService()
    {
        return $this->services['ivory.google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory.google_map.helper.map.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.map.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Map_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\BoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\CoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.point', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\PointSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.base.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Base\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\ControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.control.custom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Control\\CustomControlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\DomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\SimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Event\\EventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\LayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.geo_json', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\GeoJsonLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.heatmap', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\HeatmapLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.layer.kml', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Layer\\KmlLayerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapCenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.map_stylehseet', 'Ivory\\GoogleMap\\Helper\\Subscriber\\MapStylesheetSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\OverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.circle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\CircleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.ground_overlay', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\GroundOverlaySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.icon_sequence', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\IconSequenceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_box', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoBoxSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.close', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowCloseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\InfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.info_window.default', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\DefaultInfoWindowSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_clusterer', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerClustererSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker_shape', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerShapeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.marker.info_window.open', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\MarkerInfoWindowOpenSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polygon', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolygonSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.rectangle', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\RectangleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.overlay.symbol', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Overlay\\SymbolSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.utility.object_to_array', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Utility\\ObjectToArraySubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.map.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\StaticMapHelper A Ivory\GoogleMap\Helper\StaticMapHelper instance
     */
    protected function getIvory_GoogleMap_Helper_Map_StaticService()
    {
        return $this->services['ivory.google_map.helper.map.static'] = new \Ivory\GoogleMap\Helper\StaticMapHelper($this->get('ivory.google_map.helper.map.static.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.map.static.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_Map_Static_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.map.static.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\StaticSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.center', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\CenterSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.encoded_polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\EncodedPolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.extendable', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ExtendableSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.format', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\FormatSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.key', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\KeySubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.marker', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\MarkerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.polyline', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\PolylineSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.scale', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ScaleSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.size', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\SizeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.type', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\TypeSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.static.zoom', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Image\\ZoomSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper A Ivory\GoogleMap\Helper\PlaceAutocompleteHelper instance
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.helper.place_autocomplete'] = new \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper($this->get('ivory.google_map.helper.place_autocomplete.event_dispatcher'));
    }

    /**
     * Gets the 'ivory.google_map.helper.place_autocomplete.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher A Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher instance
     */
    protected function getIvory_GoogleMap_Helper_PlaceAutocomplete_EventDispatcherService()
    {
        $this->services['ivory.google_map.helper.place_autocomplete.event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);

        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_container', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteContainerSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_html', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteHtmlSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_init', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteInitSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete_javascript', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\AutocompleteJavascriptSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBaseSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.bound', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteBoundSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Base\\AutocompleteCoordinateSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteDomEventOnceSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteSimpleEventSubscriber');
        $instance->addSubscriberService('ivory.google_map.helper.subscriber.place.autocomplete.event.event_once', 'Ivory\\GoogleMap\\Helper\\Subscriber\\Place\\Event\\AutocompleteEventOnceSubscriber');

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiRenderer A Ivory\GoogleMap\Helper\Renderer\ApiRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiService()
    {
        return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api_init'), $this->get('ivory.google_map.helper.renderer.loader'), $this->get('ivory.google_map.helper.renderer.utility.requirement_loader'), $this->get('ivory.google_map.helper.renderer.utility.source'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.api_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer A Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_ApiInitService()
    {
        return $this->services['ivory.google_map.helper.renderer.api_init'] = new \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer A Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.bound'] = new \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer A Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer A Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer A Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.size'] = new \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.custom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.fullscreen' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.fullscreen'] = new \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ManagerService()
    {
        $this->services['ivory.google_map.helper.renderer.control.manager'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlManagerRenderer();

        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.fullscreen'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.map_type'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.rotate'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.scale'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.street_view'));
        $instance->addRenderer($this->get('ivory.google_map.helper.renderer.control.zoom'));

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.map_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.map_type_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.map_type_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.position' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.position'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.rotate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_RotateService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.rotate'] = new \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.scale_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.scale_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.street_view' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.street_view'] = new \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.zoom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.zoom_style'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.control.zoom_style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer A Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer A Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer A Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer A Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.geometry.encoding' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer A Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService()
    {
        return $this->services['ivory.google_map.helper.renderer.geometry.encoding'] = new \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.javascript_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.stylesheet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer A Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.stylesheet_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.html.tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer A Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Html_TagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer A Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.kml'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer A Ivory\GoogleMap\Helper\Renderer\LoaderRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_LoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.loader'] = new \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), 'en', 'AIzaSyDeJNzS6zPTPsVhavVFUi7WYQ1s7fhk9hE');
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapRenderer A Ivory\GoogleMap\Helper\Renderer\MapRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapService()
    {
        return $this->services['ivory.google_map.helper.renderer.map'] = new \Ivory\GoogleMap\Helper\Renderer\MapRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.manager'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer A Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_bound'] = new \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer A Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_center'] = new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer A Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_container'] = new \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer A Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_html'] = new \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.map_type_id' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer A Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_MapTypeIdService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_type_id'] = new \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.animation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.animation'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.circle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.geometry.encoding'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_ExtendableService()
    {
        $a = $this->get('ivory.google_map.helper.renderer.overlay.extendable.path');
        $b = $this->get('ivory.google_map.helper.renderer.overlay.extendable.position');
        $c = $this->get('ivory.google_map.helper.renderer.overlay.extendable.bounds');

        $this->services['ivory.google_map.helper.renderer.overlay.extendable'] = $instance = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\ExtendableRenderer();

        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\KmlLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.default_viewport'));
        $instance->setRenderer('Ivory\\GoogleMap\\Layer\\HeatmapLayer', $this->get('ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'));
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\EncodedPolyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polyline', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Polygon', $a);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\InfoWindow', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Marker', $b);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Circle', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\GroundOverlay', $c);
        $instance->setRenderer('Ivory\\GoogleMap\\Overlay\\Rectangle', $c);

        return $instance;
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.bounds' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.default_viewport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.extendable.position' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.close' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.animation'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker_clusterer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.symbol_path'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.overlay.symbol_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer A Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.place.autocomplete_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer A Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker.location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.marker.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer($this->get('ivory.google_map.helper.renderer.static.base.point'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline.location' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.overlay.polyline.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer A Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.static.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer A Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.size'] = new \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer();
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.callback' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.callback'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.object_to_array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.requirement' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.requirement_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.renderer.utility.source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer A Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer instance
     */
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_SourceService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.source'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.api_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.point' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.point'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.point'), $this->get('ivory.google_map.helper.renderer.base.point'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.base.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.size'), $this->get('ivory.google_map.helper.renderer.base.size'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_ControlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.control.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control.custom'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.control.custom'), $this->get('ivory.google_map.helper.renderer.control.custom'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_LayerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.geo_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.geo_json'), $this->get('ivory.google_map.helper.renderer.layer.geo_json'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.heatmap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.heatmap'), $this->get('ivory.google_map.helper.renderer.layer.heatmap'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.layer.kml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.kml'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.kml'), $this->get('ivory.google_map.helper.renderer.layer.kml'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map'] = new \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_center'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_container'] = new \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_container'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_html'] = new \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_html'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_init'] = new \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.map_stylehseet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber A Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.stylesheet_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_OverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.circle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.circle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.renderer.overlay.circle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.overlay.encoded_polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.extendable'), $this->get('ivory.google_map.helper.renderer.overlay.extendable'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.ground_overlay' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.renderer.overlay.ground_overlay'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.icon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon'), $this->get('ivory.google_map.helper.renderer.overlay.icon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.icon_sequence' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'), $this->get('ivory.google_map.helper.renderer.overlay.icon_sequence'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_box' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_box'), $this->get('ivory.google_map.helper.renderer.overlay.info_box'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.close' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.close'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window.default'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.default'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker.info_window.open' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker_clusterer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.overlay.marker_clusterer'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.marker_shape' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker_shape'), $this->get('ivory.google_map.helper.renderer.overlay.marker_shape'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.polygon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.renderer.overlay.polygon'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.renderer.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.rectangle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'), $this->get('ivory.google_map.helper.renderer.overlay.rectangle'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.overlay.symbol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber A Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.symbol'), $this->get('ivory.google_map.helper.renderer.overlay.symbol'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base.bound' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete.event.event_once' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_container'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_html'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_init' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.place.autocomplete_javascript' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber A Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_StaticService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.center' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_CenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.center'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.encoded_polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.collector.static.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.extendable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber($this->get('ivory.google_map.helper.collector.static.extendable'), $this->get('ivory.google_map.helper.renderer.static.overlay.extendable'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_FormatService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.format'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_KeyService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.key'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.marker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber($this->get('ivory.google_map.helper.collector.static.marker'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.polyline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber($this->get('ivory.google_map.helper.collector.static.polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.scale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.scale'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.size' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber($this->get('ivory.google_map.helper.renderer.static.size'));
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_TypeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.type'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.static.zoom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber A Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.zoom'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber();
    }

    /**
     * Gets the 'ivory.google_map.helper.subscriber.utility.object_to_array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber A Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber instance
     */
    protected function getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.utility.object_to_array'));
    }

    /**
     * Gets the 'ivory.google_map.templating.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Templating\ApiHelper A Ivory\GoogleMapBundle\Templating\ApiHelper instance
     */
    protected function getIvory_GoogleMap_Templating_ApiService()
    {
        return $this->services['ivory.google_map.templating.api'] = new \Ivory\GoogleMapBundle\Templating\ApiHelper($this->get('ivory.google_map.helper.api'));
    }

    /**
     * Gets the 'ivory.google_map.templating.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Templating\MapHelper A Ivory\GoogleMapBundle\Templating\MapHelper instance
     */
    protected function getIvory_GoogleMap_Templating_MapService()
    {
        return $this->services['ivory.google_map.templating.map'] = new \Ivory\GoogleMapBundle\Templating\MapHelper($this->get('ivory.google_map.helper.map'));
    }

    /**
     * Gets the 'ivory.google_map.templating.map.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Templating\StaticMapHelper A Ivory\GoogleMapBundle\Templating\StaticMapHelper instance
     */
    protected function getIvory_GoogleMap_Templating_Map_StaticService()
    {
        return $this->services['ivory.google_map.templating.map.static'] = new \Ivory\GoogleMapBundle\Templating\StaticMapHelper($this->get('ivory.google_map.helper.map.static'));
    }

    /**
     * Gets the 'ivory.google_map.templating.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Templating\PlaceAutocompleteHelper A Ivory\GoogleMapBundle\Templating\PlaceAutocompleteHelper instance
     */
    protected function getIvory_GoogleMap_Templating_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.templating.place_autocomplete'] = new \Ivory\GoogleMapBundle\Templating\PlaceAutocompleteHelper($this->get('ivory.google_map.helper.place_autocomplete'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\ApiExtension A Ivory\GoogleMapBundle\Twig\ApiExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_ApiService()
    {
        return $this->services['ivory.google_map.twig.extension.api'] = new \Ivory\GoogleMapBundle\Twig\ApiExtension($this->get('ivory.google_map.helper.api'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\MapExtension A Ivory\GoogleMapBundle\Twig\MapExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_MapService()
    {
        return $this->services['ivory.google_map.twig.extension.map'] = new \Ivory\GoogleMapBundle\Twig\MapExtension($this->get('ivory.google_map.helper.map'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.map.static' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\StaticMapExtension A Ivory\GoogleMapBundle\Twig\StaticMapExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_Map_StaticService()
    {
        return $this->services['ivory.google_map.twig.extension.map.static'] = new \Ivory\GoogleMapBundle\Twig\StaticMapExtension($this->get('ivory.google_map.helper.map.static'));
    }

    /**
     * Gets the 'ivory.google_map.twig.extension.place_autocomplete' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension A Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension instance
     */
    protected function getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.twig.extension.place_autocomplete'] = new \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension($this->get('ivory.google_map.helper.place_autocomplete'));
    }

    /**
     * Gets the 'ivory.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Serializer A Ivory\Serializer\Serializer instance
     */
    protected function getIvory_SerializerService()
    {
        return $this->services['ivory.serializer'] = new \Ivory\Serializer\Serializer($this->get('ivory.serializer.navigator.event'), $this->get('ivory.serializer.registry.visitor'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Accessor\ReflectionAccessor A Ivory\Serializer\Accessor\ReflectionAccessor instance
     */
    protected function getIvory_Serializer_AccessorService()
    {
        return $this->services['ivory.serializer.accessor'] = new \Ivory\Serializer\Accessor\ReflectionAccessor();
    }

    /**
     * Gets the 'ivory.serializer.event.dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcher A Symfony\Component\EventDispatcher\EventDispatcher instance
     */
    protected function getIvory_Serializer_Event_DispatcherService()
    {
        return $this->services['ivory.serializer.event.dispatcher'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }

    /**
     * Gets the 'ivory.serializer.instantiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Instantiator\DoctrineInstantiator A Ivory\Serializer\Instantiator\DoctrineInstantiator instance
     */
    protected function getIvory_Serializer_InstantiatorService()
    {
        return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
    }

    /**
     * Gets the 'ivory.serializer.mapping.factory.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory A Ivory\Serializer\Mapping\Factory\ClassMetadataFactory instance
     */
    protected function getIvory_Serializer_Mapping_Factory_DefaultService()
    {
        return $this->services['ivory.serializer.mapping.factory.default'] = new \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory($this->get('ivory.serializer.mapping.loader'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.factory.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory A Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory instance
     */
    protected function getIvory_Serializer_Mapping_Factory_EventService()
    {
        return $this->services['ivory.serializer.mapping.factory.event'] = new \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory($this->get('ivory.serializer.mapping.factory.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader A Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_LoaderService()
    {
        return $this->services['ivory.serializer.mapping.loader'] = new \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader(array(0 => $this->get('ivory.serializer.mapping.loader.reflection'), 1 => $this->get('ivory.serializer.mapping.loader.annotation')), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader A Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_Loader_AnnotationService()
    {
        return $this->services['ivory.serializer.mapping.loader.annotation'] = new \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader($this->get('annotation_reader'), $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mapping.loader.reflection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader A Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader instance
     */
    protected function getIvory_Serializer_Mapping_Loader_ReflectionService()
    {
        return $this->services['ivory.serializer.mapping.loader.reflection'] = new \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader(NULL, $this->get('ivory.serializer.type.parser'));
    }

    /**
     * Gets the 'ivory.serializer.mutator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Mutator\ReflectionMutator A Ivory\Serializer\Mutator\ReflectionMutator instance
     */
    protected function getIvory_Serializer_MutatorService()
    {
        return $this->services['ivory.serializer.mutator'] = new \Ivory\Serializer\Mutator\ReflectionMutator();
    }

    /**
     * Gets the 'ivory.serializer.navigator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Navigator\Navigator A Ivory\Serializer\Navigator\Navigator instance
     */
    protected function getIvory_Serializer_Navigator_DefaultService()
    {
        return $this->services['ivory.serializer.navigator.default'] = new \Ivory\Serializer\Navigator\Navigator($this->get('ivory.serializer.registry.type'), $this->get('ivory.serializer.type.guesser'));
    }

    /**
     * Gets the 'ivory.serializer.navigator.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Navigator\EventNavigator A Ivory\Serializer\Navigator\EventNavigator instance
     */
    protected function getIvory_Serializer_Navigator_EventService()
    {
        return $this->services['ivory.serializer.navigator.event'] = new \Ivory\Serializer\Navigator\EventNavigator($this->get('ivory.serializer.navigator.default'), $this->get('ivory.serializer.event.dispatcher'));
    }

    /**
     * Gets the 'ivory.serializer.registry.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Registry\TypeRegistry A Ivory\Serializer\Registry\TypeRegistry instance
     */
    protected function getIvory_Serializer_Registry_TypeService()
    {
        $a = $this->get('ivory.serializer.type.array');
        $b = $this->get('ivory.serializer.type.boolean');
        $c = $this->get('ivory.serializer.type.closure');
        $d = $this->get('ivory.serializer.type.date_time');
        $e = $this->get('ivory.serializer.type.exception');
        $f = $this->get('ivory.serializer.type.float');
        $g = $this->get('ivory.serializer.type.form');
        $h = $this->get('ivory.serializer.type.form_error');
        $i = $this->get('ivory.serializer.type.integer');
        $j = $this->get('ivory.serializer.type.null');
        $k = $this->get('ivory.serializer.type.object');
        $l = $this->get('ivory.serializer.type.resource');
        $m = $this->get('ivory.serializer.type.std_class');
        $n = $this->get('ivory.serializer.type.string');

        $this->services['ivory.serializer.registry.type'] = $instance = new \Ivory\Serializer\Registry\TypeRegistry();

        $instance->registerType('array', 1, $a);
        $instance->registerType('bool', 1, $b);
        $instance->registerType('boolean', 1, $b);
        $instance->registerType('closure', 1, $c);
        $instance->registerType('DateTimeInterface', 1, $d);
        $instance->registerType('Exception', 1, $e);
        $instance->registerType('double', 1, $f);
        $instance->registerType('float', 1, $f);
        $instance->registerType('numeric', 1, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 1, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 1, $h);
        $instance->registerType('int', 1, $i);
        $instance->registerType('integer', 1, $i);
        $instance->registerType('null', 1, $j);
        $instance->registerType('object', 1, $k);
        $instance->registerType('resource', 1, $l);
        $instance->registerType('stdClass', 1, $m);
        $instance->registerType('string', 1, $n);
        $instance->registerType('array', 2, $a);
        $instance->registerType('bool', 2, $b);
        $instance->registerType('boolean', 2, $b);
        $instance->registerType('closure', 2, $c);
        $instance->registerType('DateTimeInterface', 2, $d);
        $instance->registerType('Exception', 2, $e);
        $instance->registerType('double', 2, $f);
        $instance->registerType('float', 2, $f);
        $instance->registerType('numeric', 2, $f);
        $instance->registerType('Symfony\\Component\\Form\\Form', 2, $g);
        $instance->registerType('Symfony\\Component\\Form\\FormError', 2, $h);
        $instance->registerType('int', 2, $i);
        $instance->registerType('integer', 2, $i);
        $instance->registerType('null', 2, $j);
        $instance->registerType('object', 2, $k);
        $instance->registerType('resource', 2, $l);
        $instance->registerType('stdClass', 2, $m);
        $instance->registerType('string', 2, $n);

        return $instance;
    }

    /**
     * Gets the 'ivory.serializer.registry.visitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Registry\VisitorRegistry A Ivory\Serializer\Registry\VisitorRegistry instance
     */
    protected function getIvory_Serializer_Registry_VisitorService()
    {
        $this->services['ivory.serializer.registry.visitor'] = $instance = new \Ivory\Serializer\Registry\VisitorRegistry();

        $instance->registerVisitor(1, 'csv', $this->get('ivory.serializer.visitor.csv.serialization'));
        $instance->registerVisitor(2, 'csv', $this->get('ivory.serializer.visitor.csv.deserialization'));
        $instance->registerVisitor(1, 'json', $this->get('ivory.serializer.visitor.json.serialization'));
        $instance->registerVisitor(2, 'json', $this->get('ivory.serializer.visitor.json.deserialization'));
        $instance->registerVisitor(1, 'xml', $this->get('ivory.serializer.visitor.xml.serialization'));
        $instance->registerVisitor(2, 'xml', $this->get('ivory.serializer.visitor.xml.deserialization'));
        $instance->registerVisitor(1, 'yaml', $this->get('ivory.serializer.visitor.yaml.serialization'));
        $instance->registerVisitor(2, 'yaml', $this->get('ivory.serializer.visitor.yaml.deserialization'));

        return $instance;
    }

    /**
     * Gets the 'ivory.serializer.type.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ArrayType A Ivory\Serializer\Type\ArrayType instance
     */
    protected function getIvory_Serializer_Type_ArrayService()
    {
        return $this->services['ivory.serializer.type.array'] = new \Ivory\Serializer\Type\ArrayType();
    }

    /**
     * Gets the 'ivory.serializer.type.boolean' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\BooleanType A Ivory\Serializer\Type\BooleanType instance
     */
    protected function getIvory_Serializer_Type_BooleanService()
    {
        return $this->services['ivory.serializer.type.boolean'] = new \Ivory\Serializer\Type\BooleanType();
    }

    /**
     * Gets the 'ivory.serializer.type.closure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ClosureType A Ivory\Serializer\Type\ClosureType instance
     */
    protected function getIvory_Serializer_Type_ClosureService()
    {
        return $this->services['ivory.serializer.type.closure'] = new \Ivory\Serializer\Type\ClosureType();
    }

    /**
     * Gets the 'ivory.serializer.type.date_time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\DateTimeType A Ivory\Serializer\Type\DateTimeType instance
     */
    protected function getIvory_Serializer_Type_DateTimeService()
    {
        return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'Europe/Helsinki');
    }

    /**
     * Gets the 'ivory.serializer.type.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ExceptionType A Ivory\Serializer\Type\ExceptionType instance
     */
    protected function getIvory_Serializer_Type_ExceptionService()
    {
        return $this->services['ivory.serializer.type.exception'] = new \Ivory\Serializer\Type\ExceptionType(true);
    }

    /**
     * Gets the 'ivory.serializer.type.float' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\FloatType A Ivory\Serializer\Type\FloatType instance
     */
    protected function getIvory_Serializer_Type_FloatService()
    {
        return $this->services['ivory.serializer.type.float'] = new \Ivory\Serializer\Type\FloatType();
    }

    /**
     * Gets the 'ivory.serializer.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\SerializerBundle\Type\FormType A Ivory\SerializerBundle\Type\FormType instance
     */
    protected function getIvory_Serializer_Type_FormService()
    {
        return $this->services['ivory.serializer.type.form'] = new \Ivory\SerializerBundle\Type\FormType();
    }

    /**
     * Gets the 'ivory.serializer.type.form_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\SerializerBundle\Type\FormErrorType A Ivory\SerializerBundle\Type\FormErrorType instance
     */
    protected function getIvory_Serializer_Type_FormErrorService()
    {
        return $this->services['ivory.serializer.type.form_error'] = new \Ivory\SerializerBundle\Type\FormErrorType($this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'ivory.serializer.type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Guesser\TypeGuesser A Ivory\Serializer\Type\Guesser\TypeGuesser instance
     */
    protected function getIvory_Serializer_Type_GuesserService()
    {
        return $this->services['ivory.serializer.type.guesser'] = new \Ivory\Serializer\Type\Guesser\TypeGuesser();
    }

    /**
     * Gets the 'ivory.serializer.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\IntegerType A Ivory\Serializer\Type\IntegerType instance
     */
    protected function getIvory_Serializer_Type_IntegerService()
    {
        return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
    }

    /**
     * Gets the 'ivory.serializer.type.lexer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeLexer A Ivory\Serializer\Type\Parser\TypeLexer instance
     */
    protected function getIvory_Serializer_Type_LexerService()
    {
        return $this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer();
    }

    /**
     * Gets the 'ivory.serializer.type.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\NullType A Ivory\Serializer\Type\NullType instance
     */
    protected function getIvory_Serializer_Type_NullService()
    {
        return $this->services['ivory.serializer.type.null'] = new \Ivory\Serializer\Type\NullType();
    }

    /**
     * Gets the 'ivory.serializer.type.object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ObjectType A Ivory\Serializer\Type\ObjectType instance
     */
    protected function getIvory_Serializer_Type_ObjectService()
    {
        return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType($this->get('ivory.serializer.mapping.factory.default'));
    }

    /**
     * Gets the 'ivory.serializer.type.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\Parser\TypeParser A Ivory\Serializer\Type\Parser\TypeParser instance
     */
    protected function getIvory_Serializer_Type_ParserService()
    {
        return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser($this->get('ivory.serializer.type.lexer'));
    }

    /**
     * Gets the 'ivory.serializer.type.resource' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\ResourceType A Ivory\Serializer\Type\ResourceType instance
     */
    protected function getIvory_Serializer_Type_ResourceService()
    {
        return $this->services['ivory.serializer.type.resource'] = new \Ivory\Serializer\Type\ResourceType();
    }

    /**
     * Gets the 'ivory.serializer.type.std_class' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\StdClassType A Ivory\Serializer\Type\StdClassType instance
     */
    protected function getIvory_Serializer_Type_StdClassService()
    {
        return $this->services['ivory.serializer.type.std_class'] = new \Ivory\Serializer\Type\StdClassType();
    }

    /**
     * Gets the 'ivory.serializer.type.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Type\StringType A Ivory\Serializer\Type\StringType instance
     */
    protected function getIvory_Serializer_Type_StringService()
    {
        return $this->services['ivory.serializer.type.string'] = new \Ivory\Serializer\Type\StringType();
    }

    /**
     * Gets the 'ivory.serializer.visitor.csv.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor A Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Csv_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.deserialization'] = new \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), ',', '"', '\\', '.');
    }

    /**
     * Gets the 'ivory.serializer.visitor.csv.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor A Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Csv_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.serialization'] = new \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor($this->get('ivory.serializer.accessor'), ',', '"', '\\', '.');
    }

    /**
     * Gets the 'ivory.serializer.visitor.json.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor A Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Json_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.json.deserialization'] = new \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 512, 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.json.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor A Ivory\Serializer\Visitor\Json\JsonSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Json_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.json.serialization'] = new \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor($this->get('ivory.serializer.accessor'), 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.xml.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor A Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Xml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.deserialization'] = new \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 'entry', 'key');
    }

    /**
     * Gets the 'ivory.serializer.visitor.xml.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor A Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Xml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.serialization'] = new \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor($this->get('ivory.serializer.accessor'), '1.0', 'UTF-8', true, 'result', 'entry', 'key');
    }

    /**
     * Gets the 'ivory.serializer.visitor.yaml.deserialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor A Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Yaml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.deserialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 0);
    }

    /**
     * Gets the 'ivory.serializer.visitor.yaml.serialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor A Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor instance
     */
    protected function getIvory_Serializer_Visitor_Yaml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.serialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor($this->get('ivory.serializer.accessor'), 2, 4, 0);
    }

    /**
     * Gets the 'ivory_ck_editor.config_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ConfigManager A Ivory\CKEditorBundle\Model\ConfigManager instance
     */
    protected function getIvoryCkEditor_ConfigManagerService()
    {
        $this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

        $instance->setConfigs(array('my_config' => array('toolbar' => 'full', 'extraPlugins' => 'uploadimage', 'imageUploadUrl' => 'uploader/upload.php?type=Images')));
        $instance->setDefaultConfig('my_config');

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.form.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Form\Type\CKEditorType A Ivory\CKEditorBundle\Form\Type\CKEditorType instance
     */
    protected function getIvoryCkEditor_Form_TypeService()
    {
        $this->services['ivory_ck_editor.form.type'] = $instance = new \Ivory\CKEditorBundle\Form\Type\CKEditorType($this->get('ivory_ck_editor.config_manager'), $this->get('ivory_ck_editor.plugin_manager'), $this->get('ivory_ck_editor.styles_set_manager'), $this->get('ivory_ck_editor.template_manager'), $this->get('ivory_ck_editor.toolbar_manager'));

        $instance->isEnable(true);
        $instance->useJquery(false);
        $instance->isInputSync(true);

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.plugin_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\PluginManager A Ivory\CKEditorBundle\Model\PluginManager instance
     */
    protected function getIvoryCkEditor_PluginManagerService()
    {
        return $this->services['ivory_ck_editor.plugin_manager'] = new \Ivory\CKEditorBundle\Model\PluginManager();
    }

    /**
     * Gets the 'ivory_ck_editor.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Renderer\CKEditorRenderer A Ivory\CKEditorBundle\Renderer\CKEditorRenderer instance
     */
    protected function getIvoryCkEditor_RendererService()
    {
        return $this->services['ivory_ck_editor.renderer'] = new \Ivory\CKEditorBundle\Renderer\CKEditorRenderer($this);
    }

    /**
     * Gets the 'ivory_ck_editor.renderer.json_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\JsonBuilder\JsonBuilder A Ivory\JsonBuilder\JsonBuilder instance
     */
    protected function getIvoryCkEditor_Renderer_JsonBuilderService()
    {
        return $this->services['ivory_ck_editor.renderer.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder($this->get('property_accessor', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'ivory_ck_editor.styles_set_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\StylesSetManager A Ivory\CKEditorBundle\Model\StylesSetManager instance
     */
    protected function getIvoryCkEditor_StylesSetManagerService()
    {
        return $this->services['ivory_ck_editor.styles_set_manager'] = new \Ivory\CKEditorBundle\Model\StylesSetManager();
    }

    /**
     * Gets the 'ivory_ck_editor.template_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\TemplateManager A Ivory\CKEditorBundle\Model\TemplateManager instance
     */
    protected function getIvoryCkEditor_TemplateManagerService()
    {
        return $this->services['ivory_ck_editor.template_manager'] = new \Ivory\CKEditorBundle\Model\TemplateManager();
    }

    /**
     * Gets the 'ivory_ck_editor.templating.helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Templating\CKEditorHelper A Ivory\CKEditorBundle\Templating\CKEditorHelper instance
     */
    protected function getIvoryCkEditor_Templating_HelperService()
    {
        return $this->services['ivory_ck_editor.templating.helper'] = new \Ivory\CKEditorBundle\Templating\CKEditorHelper($this->get('ivory_ck_editor.renderer'));
    }

    /**
     * Gets the 'ivory_ck_editor.toolbar_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Model\ToolbarManager A Ivory\CKEditorBundle\Model\ToolbarManager instance
     */
    protected function getIvoryCkEditor_ToolbarManagerService()
    {
        $this->services['ivory_ck_editor.toolbar_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ToolbarManager();

        $instance->setItems(array('full.colors' => array(0 => 'TextColor', 1 => 'BGColor'), 'full.document' => array(0 => 'Source', 1 => '-', 2 => 'Preview', 3 => 'Print')));

        return $instance;
    }

    /**
     * Gets the 'ivory_ck_editor.twig_extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ivory\CKEditorBundle\Twig\CKEditorExtension A Ivory\CKEditorBundle\Twig\CKEditorExtension instance
     */
    protected function getIvoryCkEditor_TwigExtensionService()
    {
        return $this->services['ivory_ck_editor.twig_extension'] = new \Ivory\CKEditorBundle\Twig\CKEditorExtension($this->get('ivory_ck_editor.renderer'));
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer(array(0 => 'Symfony\\Component\\HttpFoundation\\ParameterBag', 1 => 'Symfony\\Component\\HttpFoundation\\HeaderBag', 2 => 'Symfony\\Component\\HttpFoundation\\FileBag', 3 => 'Symfony\\Component\\HttpFoundation\\ServerBag', 4 => 'Symfony\\Component\\HttpFoundation\\Request', 5 => 'Symfony\\Component\\HttpKernel\\Kernel', 6 => 'Symfony\\Component\\ClassLoader\\ClassCollectionLoader', 7 => 'Symfony\\Component\\ClassLoader\\ApcClassLoader'));
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.activation_strategy.not_found' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy A Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy instance
     */
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }

    /**
     * Gets the 'monolog.handler.console' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler A Symfony\Bridge\Monolog\Handler\ConsoleHandler instance
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.fingers_crossed.error_level_activation_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy A Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy instance
     */
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : $this->getMonolog_Processor_PsrLogMessageService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the 'monolog.logger.assetic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_AsseticService()
    {
        $this->services['monolog.logger.assetic'] = $instance = new \Symfony\Bridge\Monolog\Logger('assetic');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.null_internal'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->getDebug_LogProcessorService()) && false ?: '_'});
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->getDoctrine_Dbal_Logger_Profiling_DefaultService()) && false ?: '_'});

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler')), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add($this->get('data_collector.dump'));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('xnhyOXIukj', NULL, 'RZthqp0fzXGXk4buCSyHUB', $this->get('monolog.logger.cache', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, (__DIR__.'/assetic/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager'), array()));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->getControllerNameConverterService()) && false ?: '_'}, $d);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};
        $e = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('http_kernel');
        $g = ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'};

        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');

        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login');

        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/logout');

        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register');

        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting');

        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin$');

        $n = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user');

        $o = new \Symfony\Component\Security\Http\AccessMap();
        $o->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($k, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($l, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o->add($m, array(0 => 'ROLE_ADMIN'), NULL);
        $o->add($n, array(0 => 'ROLE_USER'), NULL);

        $p = new \Symfony\Component\Security\Http\HttpUtils($e, $e);

        $q = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $p, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($p, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $q->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());

        $r = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($p, array());
        $r->setOptions(array('login_path' => 'login', 'default_target_path' => 'dam_list', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $r->setProviderKey('main');

        $s = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($f, $p, array(), $a);
        $s->setOptions(array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($o, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => ${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'}), 'main', $a, $c, $d), 2 => $q, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $g, ${($_ = isset($this->services['security.authentication.session_strategy']) ? $this->services['security.authentication.session_strategy'] : $this->getSecurity_Authentication_SessionStrategyService()) && false ?: '_'}, $p, 'main', $r, $s, array('check_path' => 'login', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5946530d3a65c3.73150499', $a, $g), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, $o, $g)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $d, $p, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($f, $p, 'login', false), NULL, NULL, $a, false), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', NULL, true, false, 'fos_user.user_provider.username', 'main', 'security.authentication.form_entry_point.main', NULL, NULL, array(0 => 'logout', 1 => 'form_login', 2 => 'anonymous')));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.user_checker.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler instance
     */
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/dev'));
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), ${($_ = isset($this->services['session.storage.metadata_bag']) ? $this->services['session.storage.metadata_bag'] : $this->getSession_Storage_MetadataBagService()) && false ?: '_'});
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'star_rating.twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \blackknight467\StarRatingBundle\Extensions\StarRatingExtension A blackknight467\StarRatingBundle\Extensions\StarRatingExtension instance
     */
    protected function getStarRating_TwigService()
    {
        return $this->services['star_rating.twig'] = new \blackknight467\StarRatingBundle\Extensions\StarRatingExtension($this);
    }

    /**
     * Gets the 'star_rating.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \blackknight467\StarRatingBundle\Form\RatingType A blackknight467\StarRatingBundle\Form\RatingType instance
     */
    protected function getStarRating_TypeService()
    {
        return $this->services['star_rating.type'] = new \blackknight467\StarRatingBundle\Form\RatingType();
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'swiftmailer.email_sender.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener A Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener instance
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'swiftmailer.mailer.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Mailer A Swift_Mailer instance
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the 'swiftmailer.mailer.default.plugin.messagelogger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Plugins_MessageLogger A Swift_Plugins_MessageLogger instance
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the 'swiftmailer.mailer.default.transport' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Swift_Transport_EsmtpTransport A Swift_Transport_EsmtpTransport instance
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), new \Swift_Events_SimpleEventDispatcher());

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));
        (new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine A Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine instance
     */
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, array());

        $instance->addEngine(new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), ${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}));
        $instance->addEngine($this->get('debug.templating.engine.php'));

        return $instance;
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.globals' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables A Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables instance
     */
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper instance
     */
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'));
    }

    /**
     * Gets the 'templating.helper.code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper instance
     */
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, ($this->targetDirs[3].'/app'), 'UTF-8');
    }

    /**
     * Gets the 'templating.helper.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper instance
     */
    protected function getTemplating_Helper_FormService()
    {
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($this->get('debug.templating.engine.php'), array(0 => 'IvoryCKEditorBundle:Form', 1 => 'IvoryGoogleMapBundle:Form', 2 => 'FrameworkBundle:Form')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper instance
     */
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper instance
     */
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request_stack'));
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Templating\Helper\SlotsHelper A Symfony\Component\Templating\Helper\SlotsHelper instance
     */
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }

    /**
     * Gets the 'templating.helper.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper instance
     */
    protected function getTemplating_Helper_StopwatchService()
    {
        return $this->services['templating.helper.stopwatch'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.helper.translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper instance
     */
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator'));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'});
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 5 => ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/translations/messages.es.yml')), 'af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 5 => ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/translations/messages.bg.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'bg'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = $this->get('request_stack');

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'bootstrap_3_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension());
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('ivory.google_map.twig.extension.api'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map.static'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.place_autocomplete'));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, $this->get('templating.name_parser'), true, array(), array(0 => 'FrameworkBundle', 1 => 'SecurityBundle', 2 => 'TwigBundle', 3 => 'MonologBundle', 4 => 'SwiftmailerBundle', 5 => 'DoctrineBundle', 6 => 'SensioFrameworkExtraBundle', 7 => 'FOSUserBundle', 8 => 'DoctrineMigrationsBundle', 9 => 'IvoryGoogleMapBundle', 10 => 'IvorySerializerBundle', 11 => 'AsseticBundle', 12 => 'IvoryCKEditorBundle', 13 => 'StarRatingBundle', 14 => 'GoGreenBundle', 15 => 'ShopBundle', 16 => 'AdminBundle', 17 => 'UserBundle', 18 => 'DebugBundle', 19 => 'WebProfilerBundle', 20 => 'SensioDistributionBundle', 21 => 'SensioGeneratorBundle'), new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension($this->get('ivory_ck_editor.twig_extension'));
        $instance->addExtension($this->get('star_rating.twig'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner'), $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Symfony\Bundle\TwigBundle\ContainerAwareRuntimeLoader($this, array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => 'twig.runtime.httpkernel', 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer' => 'twig.form.renderer'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.form.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer A Symfony\Bridge\Twig\Form\TwigRenderer instance
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig', 1 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig', 2 => 'StarRatingBundle::rating.html.twig', 3 => 'form_div_layout.html.twig', 4 => 'bootstrap_3_layout.html.twig'), $this->get('twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['templating.locator']) ? $this->services['templating.locator'] : $this->getTemplating_LocatorService()) && false ?: '_'}, $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/ckeditor-bundle/Resources/views'), 'IvoryCKEditor');
        $instance->addPath(($this->targetDirs[3].'/vendor/blackknight467/star-rating-bundle/blackknight467/StarRatingBundle/Resources/views'), 'StarRating');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/GoGreenBundle/Resources/views'), 'GoGreen');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views'), 'Shop');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views'), 'Admin');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views'), 'User');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.runtime.httpkernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime A Symfony\Bridge\Twig\Extension\HttpKernelRuntime instance
     */
    protected function getTwig_Runtime_HttpkernelService()
    {
        return $this->services['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime($this->get('fragment.handler'));
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('fb65f46debe44b34ac4f286bc5628b30bfbaf2dd');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer(${($_ = isset($this->services['fos_user.util.canonical_fields_updater']) ? $this->services['fos_user.util.canonical_fields_updater'] : $this->getFosUser_Util_CanonicalFieldsUpdaterService()) && false ?: '_'})));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8', 0);
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'}, $this->targetDirs[3]);
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the 'annotations.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance
     */
    protected function getAnnotations_ReaderService()
    {
        return $this->services['annotations.reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the 'assetic.asset_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory A Symfony\Bundle\AsseticBundle\Factory\AssetFactory instance
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), ($this->targetDirs[3].'/app/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the 'cache.annotations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface A Symfony\Component\Cache\Adapter\AdapterInterface instance
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Jrf6sxQ9FF', 0, 'RZthqp0fzXGXk4buCSyHUB', (__DIR__.'/pools'), $this->get('monolog.logger.cache'));
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'debug.file_link_formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter A Symfony\Component\HttpKernel\Debug\FileLinkFormatter instance
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the 'debug.log_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor A Symfony\Bridge\Monolog\Processor\DebugProcessor instance
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the 'debug.security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager A Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager instance
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        $a = ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->getSecurity_Authentication_TrustResolverService()) && false ?: '_'};

        $this->services['debug.security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\DebugAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true));

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)));

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the 'fos_user.user_provider.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Security\UserProvider A FOS\UserBundle\Security\UserProvider instance
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the 'fos_user.util.canonical_fields_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater A FOS\UserBundle\Util\CanonicalFieldsUpdater instance
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the 'fos_user.util.password_updater' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater A FOS\UserBundle\Util\PasswordUpdater instance
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->getFosUser_UserProvider_UsernameService()) && false ?: '_'}, $this->get('security.user_checker.main'), 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5946530d3a65c3.73150499')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.session_strategy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy A Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy instance
     */
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.firewall.map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap A Symfony\Bundle\SecurityBundle\Security\FirewallMap instance
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => NULL));
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'web_profiler.csp.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler A Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler instance
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.logs_dir' => false,
        'images_upload' => false,
        'json_upload' => false,
        'session.save_path' => false,
        'doctrine_migrations.dir_name' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'images_upload': $value = ($this->targetDirs[3].'/app/../web/uploads/images/'); break;
            case 'json_upload': $value = ($this->targetDirs[3].'/app/../web/'); break;
            case 'session.save_path': $value = ($this->targetDirs[3].'/app/../var/sessions/dev'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/app/DoctrineMigrations'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[3].'/app/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[3].'/app/../web'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'IvoryGoogleMapBundle' => 'Ivory\\GoogleMapBundle\\IvoryGoogleMapBundle',
                'IvorySerializerBundle' => 'Ivory\\SerializerBundle\\IvorySerializerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'IvoryCKEditorBundle' => 'Ivory\\CKEditorBundle\\IvoryCKEditorBundle',
                'StarRatingBundle' => 'blackknight467\\StarRatingBundle\\StarRatingBundle',
                'GoGreenBundle' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\GoGreenBundle',
                'ShopBundle' => 'FishAndPlaces\\UI\\Bundle\\ShopBundle\\ShopBundle',
                'AdminBundle' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\AdminBundle',
                'UserBundle' => 'FishAndPlaces\\UI\\Bundle\\UserBundle\\UserBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'fish_and_places',
            'database_user' => 'root',
            'database_password' => 123456,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'fb65f46debe44b34ac4f286bc5628b30bfbaf2dd',
            'google_maps_api_key' => 'AIzaSyDeJNzS6zPTPsVhavVFUi7WYQ1s7fhk9hE',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'fb65f46debe44b34ac4f286bc5628b30bfbaf2dd',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
                1 => 'php',
            ),
            'templating.helper.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form',
                1 => 'IvoryGoogleMapBundle:Form',
                2 => 'FrameworkBundle:Form',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.cache.file' => (__DIR__.'/validation.php'),
            'validator.translation_domain' => 'validators',
            'translator.logging' => true,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'debug.error_handler.throw_at' => -1,
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => (__DIR__.'/assetic/routing.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'IvoryCKEditorBundle:Form:ckeditor_widget.html.twig',
                1 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig',
                2 => 'StarRatingBundle::rating.html.twig',
                3 => 'form_div_layout.html.twig',
                4 => 'bootstrap_3_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'FishAndPlaces\\User\\Domain\\Model\\User',
            'fos_user.profile.form.type' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Profile',
                1 => 'Default',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'vesela.ferdinandova@gmail.com' => 'Vesela',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'vesela.ferdinandova@gmail.com' => 'Vesela',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(

            ),
            'assetic.cache_dir' => (__DIR__.'/assetic'),
            'assetic.bundles' => array(
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'DoctrineBundle',
                6 => 'SensioFrameworkExtraBundle',
                7 => 'FOSUserBundle',
                8 => 'DoctrineMigrationsBundle',
                9 => 'IvoryGoogleMapBundle',
                10 => 'IvorySerializerBundle',
                11 => 'AsseticBundle',
                12 => 'IvoryCKEditorBundle',
                13 => 'StarRatingBundle',
                14 => 'GoGreenBundle',
                15 => 'ShopBundle',
                16 => 'AdminBundle',
                17 => 'UserBundle',
                18 => 'DebugBundle',
                19 => 'WebProfilerBundle',
                20 => 'SensioDistributionBundle',
                21 => 'SensioGeneratorBundle',
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.variables' => array(

            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.twig_extension.functions' => array(

            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'star_rating.config' => array(

            ),
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}

class DoctrineORMEntityManager_000000006446d9bb0000000013179ac9fbfcf4ab3fe097c1542a3189ffdd480d extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5946530d6b7ce897126339 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5946530d6b7d4559845747 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5946530d6b7b6575794947 = array(
        
    );

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getConnection', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getMetadataFactory', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getExpressionBuilder', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'beginTransaction', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getCache', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'transactional', array('func' => $func), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'commit', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'rollback', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getClassMetadata', array('className' => $className), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'createQuery', array('dql' => $dql), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'createNamedQuery', array('name' => $name), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'createQueryBuilder', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'flush', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'clear', array('entityName' => $entityName), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'close', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'persist', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'remove', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'refresh', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'detach', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'merge', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'contains', array('entity' => $entity), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getEventManager', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getConfiguration', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'isOpen', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getUnitOfWork', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getProxyFactory', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'initializeObject', array('obj' => $obj), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'getFilters', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'isFiltersStateClean', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'hasFilters', array(), $this->initializer5946530d6b7d4559845747);

        return $this->valueHolder5946530d6b7ce897126339->hasFilters();
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer5946530d6b7d4559845747 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__get', array('name' => $name), $this->initializer5946530d6b7d4559845747);

        if (isset(self::$publicProperties5946530d6b7b6575794947[$name])) {
            return $this->valueHolder5946530d6b7ce897126339->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5946530d6b7ce897126339;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = $this->valueHolder5946530d6b7ce897126339;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5946530d6b7d4559845747);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5946530d6b7ce897126339;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = $this->valueHolder5946530d6b7ce897126339;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__isset', array('name' => $name), $this->initializer5946530d6b7d4559845747);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5946530d6b7ce897126339;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5946530d6b7ce897126339;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__unset', array('name' => $name), $this->initializer5946530d6b7d4559845747);

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5946530d6b7ce897126339;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = $this->valueHolder5946530d6b7ce897126339;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__clone', array(), $this->initializer5946530d6b7d4559845747);

        $this->valueHolder5946530d6b7ce897126339 = clone $this->valueHolder5946530d6b7ce897126339;
    }

    public function __sleep()
    {
        $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, '__sleep', array(), $this->initializer5946530d6b7d4559845747);

        return array('valueHolder5946530d6b7ce897126339');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5946530d6b7d4559845747 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5946530d6b7d4559845747;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer5946530d6b7d4559845747 && $this->initializer5946530d6b7d4559845747->__invoke($this->valueHolder5946530d6b7ce897126339, $this, 'initializeProxy', array(), $this->initializer5946530d6b7d4559845747);
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder5946530d6b7ce897126339;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5946530d6b7ce897126339;
    }


}
