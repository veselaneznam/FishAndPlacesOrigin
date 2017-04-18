<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appProdProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();
        $this->services = array();
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'credissimo.user_repository' => 'getCredissimo_UserRepositoryService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
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
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'fish_and_places.dam_image_repository' => 'getFishAndPlaces_DamImageRepositoryService',
            'fish_and_places.dam_query_service' => 'getFishAndPlaces_DamQueryServiceService',
            'fish_and_places.dam_repository' => 'getFishAndPlaces_DamRepositoryService',
            'fish_and_places.dam_service' => 'getFishAndPlaces_DamServiceService',
            'fish_and_places.fish_image_repository' => 'getFishAndPlaces_FishImageRepositoryService',
            'fish_and_places.fish_query_service' => 'getFishAndPlaces_FishQueryServiceService',
            'fish_and_places.fish_repository' => 'getFishAndPlaces_FishRepositoryService',
            'fish_and_places.fish_service' => 'getFishAndPlaces_FishServiceService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
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
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
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
            'ivory.google_map.twig.extension.api' => 'getIvory_GoogleMap_Twig_Extension_ApiService',
            'ivory.google_map.twig.extension.map' => 'getIvory_GoogleMap_Twig_Extension_MapService',
            'ivory.google_map.twig.extension.map.static' => 'getIvory_GoogleMap_Twig_Extension_Map_StaticService',
            'ivory.google_map.twig.extension.place_autocomplete' => 'getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService',
            'ivory.serializer' => 'getIvory_SerializerService',
            'ivory.serializer.accessor' => 'getIvory_Serializer_AccessorService',
            'ivory.serializer.cache' => 'getIvory_Serializer_CacheService',
            'ivory.serializer.cache_warmer' => 'getIvory_Serializer_CacheWarmerService',
            'ivory.serializer.event.dispatcher' => 'getIvory_Serializer_Event_DispatcherService',
            'ivory.serializer.instantiator' => 'getIvory_Serializer_InstantiatorService',
            'ivory.serializer.mapping.factory' => 'getIvory_Serializer_Mapping_FactoryService',
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
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.activation_strategy.not_found' => 'getMonolog_ActivationStrategy_NotFoundService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => 'getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'property_accessor' => 'getPropertyAccessorService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
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
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
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
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_user.doctrine_registry' => 'doctrine',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'ivory.serializer.navigator' => 'ivory.serializer.navigator.event',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'translator' => 'translator.default',
        );
    }
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), false);
    }
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), $this->get('assets.context')), array());
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[3].'/app/Resources'));
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, ($this->targetDirs[3].'/app'), array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 7 => $this->get('ivory.serializer.cache_warmer')));
    }
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array());
    }
    protected function getCredissimo_UserRepositoryService()
    {
        return $this->services['credissimo.user_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), 85, NULL, true, NULL);
    }
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater')));
        $a->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '127.0.0.1', 'port' => NULL, 'dbname' => 'fish_and_places', 'user' => 'root', 'password' => 1234567890, 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }
    public function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['doctrine.orm.default_entity_manager'] = new DoctrineORMEntityManager_000000000ccb5ac40000000138c21140dafd985995c0262ee99a0daa3e466028(
                function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
                    $wrappedInstance = $this->getDoctrine_Orm_DefaultEntityManagerService(false);
                    $proxy->setProxyInitializer(null);
                    return true;
                }
            );
        }
        $a = new \Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver(array(($this->targetDirs[3].'/src/FishAndPlaces/User/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\User\\Domain\\Model', ($this->targetDirs[3].'/src/FishAndPlaces/Shop/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\Shop\\Domain\\Model', ($this->targetDirs[3].'/src/FishAndPlaces/Dam/Infrastructure/Mapping/ORM') => 'FishAndPlaces\\Dam\\Domain\\Model'));
        $a->setGlobalBasename('mapping');
        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver($a, 'FishAndPlaces\\User\\Domain\\Model');
        $b->addDriver($a, 'FishAndPlaces\\Shop\\Domain\\Model');
        $b->addDriver($a, 'FishAndPlaces\\Dam\\Domain\\Model');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');
        $c = new \Doctrine\ORM\Configuration();
        $c->setEntityNamespaces(array('DamBundle' => 'FishAndPlaces\\Dam\\Domain\\Model', 'ShopBundle' => 'FishAndPlaces\\Shop\\Domain\\Model'));
        $c->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $c->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $c->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $c->setMetadataDriverImpl($b);
        $c->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $c);
        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);
        return $instance;
    }
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_288b2db486a24d1ad45c904c8c8663b2c482937045b84d9df20059a5408d10f0');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_288b2db486a24d1ad45c904c8c8663b2c482937045b84d9df20059a5408d10f0');
        return $instance;
    }
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();
        $instance->setNamespace('sf2orm_default_288b2db486a24d1ad45c904c8c8663b2c482937045b84d9df20059a5408d10f0');
        return $instance;
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
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
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[3].'/app/Resources'));
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getFishAndPlaces_DamImageRepositoryService()
    {
        return $this->services['fish_and_places.dam_image_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\Dam\\Domain\\Model\\DamImage');
    }
    protected function getFishAndPlaces_DamQueryServiceService()
    {
        return $this->services['fish_and_places.dam_query_service'] = new \FishAndPlaces\Dam\Application\Dam\DamQueryService($this->get('fish_and_places.dam_repository'));
    }
    protected function getFishAndPlaces_DamRepositoryService()
    {
        return $this->services['fish_and_places.dam_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\Dam\\Domain\\Model\\Dam');
    }
    protected function getFishAndPlaces_DamServiceService()
    {
        return $this->services['fish_and_places.dam_service'] = new \FishAndPlaces\Dam\Application\Dam\DamService($this->get('fish_and_places.dam_repository'));
    }
    protected function getFishAndPlaces_FishImageRepositoryService()
    {
        return $this->services['fish_and_places.fish_image_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\Dam\\Domain\\Model\\FishImage');
    }
    protected function getFishAndPlaces_FishQueryServiceService()
    {
        return $this->services['fish_and_places.fish_query_service'] = new \FishAndPlaces\Dam\Application\Fish\FishQueryService($this->get('fish_and_places.fish_repository'));
    }
    protected function getFishAndPlaces_FishRepositoryService()
    {
        return $this->services['fish_and_places.fish_repository'] = $this->get('doctrine')->getRepository('FishAndPlaces\\Dam\\Domain\\Model\\Fish');
    }
    protected function getFishAndPlaces_FishServiceService()
    {
        return $this->services['fish_and_places.fish_service'] = new \FishAndPlaces\Dam\Application\Fish\FishService($this->get('fish_and_places.fish_repository'));
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'Ivory\\GoogleMapBundle\\Form\\Type\\PlaceAutocompleteType' => 'ivory.google_map.form.type.place_autocomplete'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler(new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'))));
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator.default'));
    }
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('vesela.ferdinandova@gmail.com' => 'Vesela'), 'resetting' => array('vesela.ferdinandova@gmail.com' => 'Vesela'))));
    }
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', array(0 => 'Profile', 1 => 'Default'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', array(0 => 'Registration', 1 => 'Default'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', array(0 => 'ResetPassword', 1 => 'Default'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker.main'), $this->get('security.authentication.session_strategy'), $this->get('request_stack'), NULL);
    }
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater'), $this->get('doctrine')->getManager(NULL), 'FishAndPlaces\\User\\Domain\\Model\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('event_dispatcher'), $this->get('request_stack'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), false);
        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');
        return $instance;
    }
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('request_stack'), false);
    }
    protected function getIvory_GoogleMap_Form_Type_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.form.type.place_autocomplete'] = new \Ivory\GoogleMapBundle\Form\Type\PlaceAutocompleteType();
    }
    protected function getIvory_GoogleMap_Helper_ApiService()
    {
        return $this->services['ivory.google_map.helper.api'] = new \Ivory\GoogleMap\Helper\ApiHelper($this->get('ivory.google_map.helper.api.event_dispatcher'));
    }
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
    protected function getIvory_GoogleMap_Helper_Collector_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Base\BoundCollector($this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Base\CoordinateCollector($this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.collector.layer.heatmap'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.collector.base.point'] = new \Ivory\GoogleMap\Helper\Collector\Base\PointCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.collector.base.size'] = new \Ivory\GoogleMap\Helper\Collector\Base\SizeCollector($this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.collector.overlay.icon'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.collector.control.custom'] = new \Ivory\GoogleMap\Helper\Collector\Control\CustomControlCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\DomEventOnceCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Event\EventOnceCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Collector\Layer\GeoJsonLayerCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Collector\Layer\HeatmapLayerCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.collector.layer.kml'] = new \Ivory\GoogleMap\Helper\Collector\Layer\KmlLayerCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.circle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\CircleCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\EncodedPolylineCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\ExtendableCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\GroundOverlayCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\IconSequenceCollector($this->get('ivory.google_map.helper.collector.overlay.polyline'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoBoxCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindowService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\InfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\DefaultInfoWindowCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\MarkerShapeCollector($this->get('ivory.google_map.helper.collector.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolygonCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\PolylineCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\RectangleCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.collector.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Collector\Overlay\SymbolCollector($this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteBoundCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Collector\Place\Base\AutocompleteCoordinateCollector($this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteDomEventOnceCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.collector.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Collector\Place\Event\AutocompleteEventOnceCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\EncodedPolylineCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.collector.static.extendable'] = new \Ivory\GoogleMap\Helper\Collector\Image\ExtendableCollector();
    }
    protected function getIvory_GoogleMap_Helper_Collector_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.collector.static.marker'] = new \Ivory\GoogleMap\Helper\Collector\Image\MarkerCollector($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'));
    }
    protected function getIvory_GoogleMap_Helper_Collector_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.collector.static.polyline'] = new \Ivory\GoogleMap\Helper\Collector\Image\PolylineCollector();
    }
    protected function getIvory_GoogleMap_Helper_FormatterService()
    {
        return $this->services['ivory.google_map.helper.formatter'] = new \Ivory\GoogleMap\Helper\Formatter\Formatter();
    }
    protected function getIvory_GoogleMap_Helper_JsonBuilderService()
    {
        return $this->services['ivory.google_map.helper.json_builder'] = new \Ivory\JsonBuilder\JsonBuilder();
    }
    protected function getIvory_GoogleMap_Helper_MapService()
    {
        return $this->services['ivory.google_map.helper.map'] = new \Ivory\GoogleMap\Helper\MapHelper($this->get('ivory.google_map.helper.map.event_dispatcher'));
    }
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
    protected function getIvory_GoogleMap_Helper_Map_StaticService()
    {
        return $this->services['ivory.google_map.helper.map.static'] = new \Ivory\GoogleMap\Helper\StaticMapHelper($this->get('ivory.google_map.helper.map.static.event_dispatcher'));
    }
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
    protected function getIvory_GoogleMap_Helper_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.helper.place_autocomplete'] = new \Ivory\GoogleMap\Helper\PlaceAutocompleteHelper($this->get('ivory.google_map.helper.place_autocomplete.event_dispatcher'));
    }
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
    protected function getIvory_GoogleMap_Helper_Renderer_ApiService()
    {
        return $this->services['ivory.google_map.helper.renderer.api'] = new \Ivory\GoogleMap\Helper\Renderer\ApiRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api_init'), $this->get('ivory.google_map.helper.renderer.loader'), $this->get('ivory.google_map.helper.renderer.utility.requirement_loader'), $this->get('ivory.google_map.helper.renderer.utility.source'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_ApiInitService()
    {
        return $this->services['ivory.google_map.helper.renderer.api_init'] = new \Ivory\GoogleMap\Helper\Renderer\ApiInitRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.bound'] = new \Ivory\GoogleMap\Helper\Renderer\Base\BoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Base\CoordinateRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Base\PointRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.base.size'] = new \Ivory\GoogleMap\Helper\Renderer\Base\SizeRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.custom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\CustomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_FullscreenService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.fullscreen'] = new \Ivory\GoogleMap\Helper\Renderer\Control\FullscreenControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }
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
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.map_type_style'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_MapTypeStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.map_type_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\MapTypeControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.position'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ControlPositionRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_RotateService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.rotate'] = new \Ivory\GoogleMap\Helper\Renderer\Control\RotateControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.scale_style'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ScaleStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.scale_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ScaleControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_StreetViewService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.street_view'] = new \Ivory\GoogleMap\Helper\Renderer\Control\StreetViewControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.control.position'), $this->get('ivory.google_map.helper.renderer.control.zoom_style'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Control_ZoomStyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.control.zoom_style'] = new \Ivory\GoogleMap\Helper\Renderer\Control\ZoomControlStyleRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\DomEventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.renderer.event.event_once'] = new \Ivory\GoogleMap\Helper\Renderer\Event\EventOnceRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Geometry_EncodingService()
    {
        return $this->services['ivory.google_map.helper.renderer.geometry.encoding'] = new \Ivory\GoogleMap\Helper\Renderer\Geometry\EncodingRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Html_JavascriptTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.javascript_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\JavascriptTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Html_StylesheetTagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.stylesheet_tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\StylesheetTagRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Html_TagService()
    {
        return $this->services['ivory.google_map.helper.renderer.html.tag'] = new \Ivory\GoogleMap\Helper\Renderer\Html\TagRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\GeoJsonLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\HeatmapLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.layer.kml'] = new \Ivory\GoogleMap\Helper\Renderer\Layer\KmlLayerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_LoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.loader'] = new \Ivory\GoogleMap\Helper\Renderer\LoaderRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), 'en');
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapService()
    {
        return $this->services['ivory.google_map.helper.renderer.map'] = new \Ivory\GoogleMap\Helper\Renderer\MapRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.map_type_id'), $this->get('ivory.google_map.helper.renderer.control.manager'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_bound'] = new \Ivory\GoogleMap\Helper\Renderer\MapBoundRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_center'] = new \Ivory\GoogleMap\Helper\Renderer\MapCenterRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_container'] = new \Ivory\GoogleMap\Helper\Renderer\MapContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_html'] = new \Ivory\GoogleMap\Helper\Renderer\MapHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'), $this->get('ivory.google_map.helper.renderer.html.stylesheet'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_MapTypeIdService()
    {
        return $this->services['ivory.google_map.helper.renderer.map_type_id'] = new \Ivory\GoogleMap\Helper\Renderer\MapTypeIdRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_AnimationService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.animation'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\AnimationRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.circle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\CircleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.geometry.encoding'));
    }
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
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_BoundsService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.bounds'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\BoundsExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_DefaultViewportService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.default_viewport'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\DefaultViewportExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_HeatmapLayerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.heatmap_layer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\HeatmapLayerExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PathExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_Extendable_PositionService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.extendable.position'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\Extendable\PositionExtendableRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\GroundOverlayRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\IconSequenceRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoBoxRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowCloseRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\DefaultInfoWindowRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\InfoWindowOpenRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.animation'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerClustererRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\MarkerShapeRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolygonRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\RectangleRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.overlay.symbol_path'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Overlay_SymbolPathService()
    {
        return $this->services['ivory.google_map.helper.renderer.overlay.symbol_path'] = new \Ivory\GoogleMap\Helper\Renderer\Overlay\SymbolPathRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.utility.requirement'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteContainerRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.json_builder'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.renderer.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Renderer\Place\AutocompleteHtmlRenderer($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.tag'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.coordinate'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\CoordinateRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.base.point'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Base\PointRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineStyleRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_EncodedPolyline_ValueService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.encoded_polyline.value'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\EncodedPolylineValueRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\ExtendableRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.marker.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker.location'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Marker_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.marker.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\MarkerStyleRenderer($this->get('ivory.google_map.helper.renderer.static.base.point'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineRenderer($this->get('ivory.google_map.helper.renderer.static.overlay.polyline.style'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline.location'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_LocationService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.location'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineLocationRenderer($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_Overlay_Polyline_StyleService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.overlay.polyline.style'] = new \Ivory\GoogleMap\Helper\Renderer\Image\Overlay\PolylineStyleRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.renderer.static.size'] = new \Ivory\GoogleMap\Helper\Renderer\Image\SizeRenderer();
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_CallbackService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.callback'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\CallbackRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\ObjectToArrayRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_RequirementLoaderService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.requirement_loader'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\RequirementLoaderRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Renderer_Utility_SourceService()
    {
        return $this->services['ivory.google_map.helper.renderer.utility.source'] = new \Ivory\GoogleMap\Helper\Renderer\Utility\SourceRenderer($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_ApiJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.api_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\ApiJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.api'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\BoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\CoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_PointService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.point'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\PointSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.point'), $this->get('ivory.google_map.helper.renderer.base.point'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Base_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.base.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Base\SizeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.base.size'), $this->get('ivory.google_map.helper.renderer.base.size'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_ControlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\ControlSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Control_CustomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.control.custom'] = new \Ivory\GoogleMap\Helper\Subscriber\Control\CustomControlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.control.custom'), $this->get('ivory.google_map.helper.renderer.control.custom'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\DomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\SimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Event\EventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_LayerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\LayerSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_GeoJsonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.geo_json'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\GeoJsonLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.geo_json'), $this->get('ivory.google_map.helper.renderer.layer.geo_json'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_HeatmapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.heatmap'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\HeatmapLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.heatmap'), $this->get('ivory.google_map.helper.renderer.layer.heatmap'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Layer_KmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.layer.kml'] = new \Ivory\GoogleMap\Helper\Subscriber\Layer\KmlLayerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.layer.kml'), $this->get('ivory.google_map.helper.renderer.layer.kml'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map'] = new \Ivory\GoogleMap\Helper\Subscriber\MapSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapBoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_bound'] = new \Ivory\GoogleMap\Helper\Subscriber\MapBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_bound'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapCenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_center'] = new \Ivory\GoogleMap\Helper\Subscriber\MapCenterSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_center'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_container'] = new \Ivory\GoogleMap\Helper\Subscriber\MapContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_container'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_html'] = new \Ivory\GoogleMap\Helper\Subscriber\MapHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map_html'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_init'] = new \Ivory\GoogleMap\Helper\Subscriber\MapInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\MapJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.map'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_MapStylehseetService()
    {
        return $this->services['ivory.google_map.helper.subscriber.map_stylehseet'] = new \Ivory\GoogleMap\Helper\Subscriber\MapStylesheetSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.html.stylesheet_tag'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_OverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\OverlaySubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_CircleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.circle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\CircleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.circle'), $this->get('ivory.google_map.helper.renderer.overlay.circle'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.overlay.encoded_polyline'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\ExtendableSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.extendable'), $this->get('ivory.google_map.helper.renderer.overlay.extendable'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_GroundOverlayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.ground_overlay'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\GroundOverlaySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.ground_overlay'), $this->get('ivory.google_map.helper.renderer.overlay.ground_overlay'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon'), $this->get('ivory.google_map.helper.renderer.overlay.icon'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_IconSequenceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.icon_sequence'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\IconSequenceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.icon_sequence'), $this->get('ivory.google_map.helper.renderer.overlay.icon_sequence'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoBoxService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_box'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoBoxSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_box'), $this->get('ivory.google_map.helper.renderer.overlay.info_box'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_CloseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.close'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowCloseSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.close'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_DefaultService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.default'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\DefaultInfoWindowSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window.default'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.default'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\InfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.info_window'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_Marker_InfoWindow_OpenService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker.info_window.open'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerInfoWindowOpenSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker'), $this->get('ivory.google_map.helper.renderer.overlay.info_window.open'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerClustererService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_clusterer'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerClustererSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.overlay.marker_clusterer'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_MarkerShapeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.marker_shape'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\MarkerShapeSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.marker_shape'), $this->get('ivory.google_map.helper.renderer.overlay.marker_shape'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolygonService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polygon'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolygonSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polygon'), $this->get('ivory.google_map.helper.renderer.overlay.polygon'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\PolylineSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.polyline'), $this->get('ivory.google_map.helper.renderer.overlay.polyline'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_RectangleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.rectangle'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\RectangleSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.rectangle'), $this->get('ivory.google_map.helper.renderer.overlay.rectangle'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Overlay_SymbolService()
    {
        return $this->services['ivory.google_map.helper.subscriber.overlay.symbol'] = new \Ivory\GoogleMap\Helper\Subscriber\Overlay\SymbolSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.overlay.symbol'), $this->get('ivory.google_map.helper.renderer.overlay.symbol'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_BaseService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBaseSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_BoundService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.bound'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteBoundSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.bound'), $this->get('ivory.google_map.helper.renderer.base.bound'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Base_CoordinateService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.base.coordinate'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Base\AutocompleteCoordinateSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.base.coordinate'), $this->get('ivory.google_map.helper.renderer.base.coordinate'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event'), $this->get('ivory.google_map.helper.renderer.event.dom_event'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_DomEventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.dom_event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteDomEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.dom_event_once'), $this->get('ivory.google_map.helper.renderer.event.dom_event_once'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteSimpleEventSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event'), $this->get('ivory.google_map.helper.renderer.event.event'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_Autocomplete_Event_EventOnceService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete.event.event_once'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\Event\AutocompleteEventOnceSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.collector.place.autocomplete.event.event_once'), $this->get('ivory.google_map.helper.renderer.event.event_once'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteContainerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_container'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteContainerSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_container'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteHtmlService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_html'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteHtmlSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete_html'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteInitService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_init'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteInitSubscriber($this->get('ivory.google_map.helper.formatter'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Place_AutocompleteJavascriptService()
    {
        return $this->services['ivory.google_map.helper.subscriber.place.autocomplete_javascript'] = new \Ivory\GoogleMap\Helper\Subscriber\Place\AutocompleteJavascriptSubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.place.autocomplete'), $this->get('ivory.google_map.helper.renderer.utility.callback'), $this->get('ivory.google_map.helper.renderer.html.javascript_tag'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_StaticService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\StaticSubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_CenterService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.center'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\CenterSubscriber($this->get('ivory.google_map.helper.renderer.static.base.coordinate'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_EncodedPolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.encoded_polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\EncodedPolylineSubscriber($this->get('ivory.google_map.helper.collector.static.encoded_polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.encoded_polyline'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ExtendableService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.extendable'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ExtendableSubscriber($this->get('ivory.google_map.helper.collector.static.extendable'), $this->get('ivory.google_map.helper.renderer.static.overlay.extendable'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_FormatService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.format'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\FormatSubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_KeyService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.key'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\KeySubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_MarkerService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.marker'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\MarkerSubscriber($this->get('ivory.google_map.helper.collector.static.marker'), $this->get('ivory.google_map.helper.renderer.static.overlay.marker'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_PolylineService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.polyline'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\PolylineSubscriber($this->get('ivory.google_map.helper.collector.static.polyline'), $this->get('ivory.google_map.helper.renderer.static.overlay.polyline'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ScaleService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.scale'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ScaleSubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_SizeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.size'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\SizeSubscriber($this->get('ivory.google_map.helper.renderer.static.size'));
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_TypeService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.type'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\TypeSubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Static_ZoomService()
    {
        return $this->services['ivory.google_map.helper.subscriber.static.zoom'] = new \Ivory\GoogleMap\Helper\Subscriber\Image\ZoomSubscriber();
    }
    protected function getIvory_GoogleMap_Helper_Subscriber_Utility_ObjectToArrayService()
    {
        return $this->services['ivory.google_map.helper.subscriber.utility.object_to_array'] = new \Ivory\GoogleMap\Helper\Subscriber\Utility\ObjectToArraySubscriber($this->get('ivory.google_map.helper.formatter'), $this->get('ivory.google_map.helper.renderer.utility.object_to_array'));
    }
    protected function getIvory_GoogleMap_Twig_Extension_ApiService()
    {
        return $this->services['ivory.google_map.twig.extension.api'] = new \Ivory\GoogleMapBundle\Twig\ApiExtension($this->get('ivory.google_map.helper.api'));
    }
    protected function getIvory_GoogleMap_Twig_Extension_MapService()
    {
        return $this->services['ivory.google_map.twig.extension.map'] = new \Ivory\GoogleMapBundle\Twig\MapExtension($this->get('ivory.google_map.helper.map'));
    }
    protected function getIvory_GoogleMap_Twig_Extension_Map_StaticService()
    {
        return $this->services['ivory.google_map.twig.extension.map.static'] = new \Ivory\GoogleMapBundle\Twig\StaticMapExtension($this->get('ivory.google_map.helper.map.static'));
    }
    protected function getIvory_GoogleMap_Twig_Extension_PlaceAutocompleteService()
    {
        return $this->services['ivory.google_map.twig.extension.place_autocomplete'] = new \Ivory\GoogleMapBundle\Twig\PlaceAutocompleteExtension($this->get('ivory.google_map.helper.place_autocomplete'));
    }
    protected function getIvory_SerializerService()
    {
        return $this->services['ivory.serializer'] = new \Ivory\Serializer\Serializer($this->get('ivory.serializer.navigator.event'), $this->get('ivory.serializer.registry.visitor'), $this->get('ivory.serializer.type.parser'));
    }
    protected function getIvory_Serializer_AccessorService()
    {
        return $this->services['ivory.serializer.accessor'] = new \Ivory\Serializer\Accessor\ReflectionAccessor();
    }
    protected function getIvory_Serializer_CacheService()
    {
        return $this->services['ivory.serializer.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (__DIR__.'/ivory-serializer'));
    }
    protected function getIvory_Serializer_CacheWarmerService()
    {
        return $this->services['ivory.serializer.cache_warmer'] = new \Ivory\SerializerBundle\CacheWarmer\SerializerCacheWarmer($this->get('ivory.serializer.mapping.factory'), $this->get('ivory.serializer.mapping.loader'), $this->get('ivory.serializer.cache'));
    }
    protected function getIvory_Serializer_Event_DispatcherService()
    {
        return $this->services['ivory.serializer.event.dispatcher'] = new \Symfony\Component\EventDispatcher\EventDispatcher();
    }
    protected function getIvory_Serializer_InstantiatorService()
    {
        return $this->services['ivory.serializer.instantiator'] = new \Ivory\Serializer\Instantiator\DoctrineInstantiator();
    }
    protected function getIvory_Serializer_Mapping_FactoryService()
    {
        return $this->services['ivory.serializer.mapping.factory'] = new \Ivory\Serializer\Mapping\Factory\CacheClassMetadataFactory($this->get('ivory.serializer.mapping.factory.event'), $this->get('ivory.serializer.cache'), 'ivory_serializer');
    }
    protected function getIvory_Serializer_Mapping_Factory_DefaultService()
    {
        return $this->services['ivory.serializer.mapping.factory.default'] = new \Ivory\Serializer\Mapping\Factory\ClassMetadataFactory($this->get('ivory.serializer.mapping.loader'));
    }
    protected function getIvory_Serializer_Mapping_Factory_EventService()
    {
        return $this->services['ivory.serializer.mapping.factory.event'] = new \Ivory\Serializer\Mapping\Factory\EventClassMetadataFactory($this->get('ivory.serializer.mapping.factory.default'), $this->get('ivory.serializer.event.dispatcher'));
    }
    protected function getIvory_Serializer_Mapping_LoaderService()
    {
        return $this->services['ivory.serializer.mapping.loader'] = new \Ivory\Serializer\Mapping\Loader\ChainClassMetadataLoader(array(0 => $this->get('ivory.serializer.mapping.loader.reflection'), 1 => $this->get('ivory.serializer.mapping.loader.annotation')), $this->get('ivory.serializer.type.parser'));
    }
    protected function getIvory_Serializer_Mapping_Loader_AnnotationService()
    {
        return $this->services['ivory.serializer.mapping.loader.annotation'] = new \Ivory\Serializer\Mapping\Loader\AnnotationClassMetadataLoader($this->get('annotation_reader'), $this->get('ivory.serializer.type.parser'));
    }
    protected function getIvory_Serializer_Mapping_Loader_ReflectionService()
    {
        return $this->services['ivory.serializer.mapping.loader.reflection'] = new \Ivory\Serializer\Mapping\Loader\ReflectionClassMetadataLoader(NULL, $this->get('ivory.serializer.type.parser'));
    }
    protected function getIvory_Serializer_MutatorService()
    {
        return $this->services['ivory.serializer.mutator'] = new \Ivory\Serializer\Mutator\ReflectionMutator();
    }
    protected function getIvory_Serializer_Navigator_DefaultService()
    {
        return $this->services['ivory.serializer.navigator.default'] = new \Ivory\Serializer\Navigator\Navigator($this->get('ivory.serializer.registry.type'), $this->get('ivory.serializer.type.guesser'));
    }
    protected function getIvory_Serializer_Navigator_EventService()
    {
        return $this->services['ivory.serializer.navigator.event'] = new \Ivory\Serializer\Navigator\EventNavigator($this->get('ivory.serializer.navigator.default'), $this->get('ivory.serializer.event.dispatcher'));
    }
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
    protected function getIvory_Serializer_Type_ArrayService()
    {
        return $this->services['ivory.serializer.type.array'] = new \Ivory\Serializer\Type\ArrayType();
    }
    protected function getIvory_Serializer_Type_BooleanService()
    {
        return $this->services['ivory.serializer.type.boolean'] = new \Ivory\Serializer\Type\BooleanType();
    }
    protected function getIvory_Serializer_Type_ClosureService()
    {
        return $this->services['ivory.serializer.type.closure'] = new \Ivory\Serializer\Type\ClosureType();
    }
    protected function getIvory_Serializer_Type_DateTimeService()
    {
        return $this->services['ivory.serializer.type.date_time'] = new \Ivory\Serializer\Type\DateTimeType('Y-m-d\\TH:i:sP', 'Europe/Madrid');
    }
    protected function getIvory_Serializer_Type_ExceptionService()
    {
        return $this->services['ivory.serializer.type.exception'] = new \Ivory\Serializer\Type\ExceptionType(false);
    }
    protected function getIvory_Serializer_Type_FloatService()
    {
        return $this->services['ivory.serializer.type.float'] = new \Ivory\Serializer\Type\FloatType();
    }
    protected function getIvory_Serializer_Type_FormService()
    {
        return $this->services['ivory.serializer.type.form'] = new \Ivory\SerializerBundle\Type\FormType();
    }
    protected function getIvory_Serializer_Type_FormErrorService()
    {
        return $this->services['ivory.serializer.type.form_error'] = new \Ivory\SerializerBundle\Type\FormErrorType($this->get('translator.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getIvory_Serializer_Type_GuesserService()
    {
        return $this->services['ivory.serializer.type.guesser'] = new \Ivory\Serializer\Type\Guesser\TypeGuesser();
    }
    protected function getIvory_Serializer_Type_IntegerService()
    {
        return $this->services['ivory.serializer.type.integer'] = new \Ivory\Serializer\Type\IntegerType();
    }
    protected function getIvory_Serializer_Type_LexerService()
    {
        return $this->services['ivory.serializer.type.lexer'] = new \Ivory\Serializer\Type\Parser\TypeLexer();
    }
    protected function getIvory_Serializer_Type_NullService()
    {
        return $this->services['ivory.serializer.type.null'] = new \Ivory\Serializer\Type\NullType();
    }
    protected function getIvory_Serializer_Type_ObjectService()
    {
        return $this->services['ivory.serializer.type.object'] = new \Ivory\Serializer\Type\ObjectType($this->get('ivory.serializer.mapping.factory'));
    }
    protected function getIvory_Serializer_Type_ParserService()
    {
        return $this->services['ivory.serializer.type.parser'] = new \Ivory\Serializer\Type\Parser\TypeParser($this->get('ivory.serializer.type.lexer'));
    }
    protected function getIvory_Serializer_Type_ResourceService()
    {
        return $this->services['ivory.serializer.type.resource'] = new \Ivory\Serializer\Type\ResourceType();
    }
    protected function getIvory_Serializer_Type_StdClassService()
    {
        return $this->services['ivory.serializer.type.std_class'] = new \Ivory\Serializer\Type\StdClassType();
    }
    protected function getIvory_Serializer_Type_StringService()
    {
        return $this->services['ivory.serializer.type.string'] = new \Ivory\Serializer\Type\StringType();
    }
    protected function getIvory_Serializer_Visitor_Csv_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.deserialization'] = new \Ivory\Serializer\Visitor\Csv\CsvDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), ',', '"', '\\', '.');
    }
    protected function getIvory_Serializer_Visitor_Csv_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.csv.serialization'] = new \Ivory\Serializer\Visitor\Csv\CsvSerializationVisitor($this->get('ivory.serializer.accessor'), ',', '"', '\\', '.');
    }
    protected function getIvory_Serializer_Visitor_Json_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.json.deserialization'] = new \Ivory\Serializer\Visitor\Json\JsonDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 512, 0);
    }
    protected function getIvory_Serializer_Visitor_Json_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.json.serialization'] = new \Ivory\Serializer\Visitor\Json\JsonSerializationVisitor($this->get('ivory.serializer.accessor'), 0);
    }
    protected function getIvory_Serializer_Visitor_Xml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.deserialization'] = new \Ivory\Serializer\Visitor\Xml\XmlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 'entry', 'key');
    }
    protected function getIvory_Serializer_Visitor_Xml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.xml.serialization'] = new \Ivory\Serializer\Visitor\Xml\XmlSerializationVisitor($this->get('ivory.serializer.accessor'), '1.0', 'UTF-8', false, 'result', 'entry', 'key');
    }
    protected function getIvory_Serializer_Visitor_Yaml_DeserializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.deserialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlDeserializationVisitor($this->get('ivory.serializer.instantiator'), $this->get('ivory.serializer.mutator'), 0);
    }
    protected function getIvory_Serializer_Visitor_Yaml_SerializationService()
    {
        return $this->services['ivory.serializer.visitor.yaml.serialization'] = new \Ivory\Serializer\Visitor\Yaml\YamlSerializationVisitor($this->get('ivory.serializer.accessor'), 2, 4, 0);
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'en', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_ActivationStrategy_NotFoundService()
    {
        return $this->services['monolog.activation_strategy.not_found'] = new \Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy();
    }
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        return $instance;
    }
    protected function getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService()
    {
        return $this->services['monolog.handler.fingers_crossed.error_level_activation_strategy'] = new \Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy();
    }
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);
        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        return $instance;
    }
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/prod.log'), 100, true, NULL);
        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        return $instance;
    }
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        return $instance;
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        return $instance;
    }
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
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
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('security.token_storage');
        $c = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('http_kernel');
        $f = $this->get('security.authentication.manager');
        $g = new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$');
        $h = new \Symfony\Component\HttpFoundation\RequestMatcher('^/logout$');
        $i = new \Symfony\Component\HttpFoundation\RequestMatcher('^/register');
        $j = new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting');
        $k = new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin$');
        $l = new \Symfony\Component\HttpFoundation\RequestMatcher('^/user');
        $m = new \Symfony\Component\HttpFoundation\RequestMatcher('^/');
        $n = new \Symfony\Component\Security\Http\AccessMap();
        $n->add($g, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $n->add($h, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $n->add($i, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $n->add($j, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $n->add($k, array(0 => 'ROLE_ADMIN'), NULL);
        $n->add($l, array(0 => 'ROLE_USER'), NULL);
        $n->add($m, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $n->add($m, array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $o = new \Symfony\Component\Security\Http\HttpUtils($d, $d);
        $p = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $o, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($o, '/'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => '/logout'));
        $p->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $q = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($o, array());
        $q->setOptions(array('login_path' => 'login', 'default_target_path' => 'homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $q->setProviderKey('main');
        $r = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($e, $o, array(), $a);
        $r->setOptions(array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($n, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $a), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($b, array(0 => $this->get('fos_user.user_provider.username')), 'main', $a, $c), 2 => $p, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $f, $this->get('security.authentication.session_strategy'), $o, 'main', $q, $r, array('check_path' => 'login', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $a, $c, NULL), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '58e0cb334a7b62.34711130', $a, $f), 5 => new \Symfony\Component\Security\Http\Firewall\AccessListener($b, $this->get('security.access.decision_manager'), $n, $f)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $o, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($e, $o, 'login', false), NULL, NULL, $a, false));
    }
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler(($this->targetDirs[3].'/app/../var/sessions/prod'));
    }
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'), $this->get('session.storage.metadata_bag'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
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
        call_user_func(array(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 'configure'), $instance);
        return $instance;
    }
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
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
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
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
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => false, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.af.yml')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ar.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ar.yml')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.bg.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.bg.yml'), 5 => ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/translations/messages.bg.yml')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ca.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ca.yml')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.cs.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.cs.yml')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.da.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.da.yml')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.de.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.de.yml')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.el.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.el.yml')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.es.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.es.yml'), 5 => ($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/translations/messages.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.et.yml')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eu.yml')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fa.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fa.yml')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fi.yml')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.fr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.he.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hr.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hr.yml')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.hu.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.hu.yml')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.id.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.id.yml')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.it.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.it.yml')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ja.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ja.yml')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lb.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lb.yml')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.lt.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lt.yml')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nb.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nb.yml')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.nl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.nl.yml')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pl.yml')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.pt_BR.yml')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ro.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ro.yml')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ru.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ru.yml')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sk.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sk.yml')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sl.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sr_Latn.yml')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.sv.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.sv.yml')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.th.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.th.yml')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.tr.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.tr.yml')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.uk.yml')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.vi.xlf'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.vi.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.zh_CN.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.lv.yml'), 2 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.lv.yml')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../Resources/translations/security.ua.xlf')), 'eo' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/translations/validators.ky.yml')))), array());
        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'bg'));
        return $instance;
    }
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator.default'), $this->get('request_stack'));
    }
    protected function getTwigService()
    {
        $a = $this->get('request_stack');
        $b = new \Symfony\Bridge\Twig\AppVariable();
        $b->setEnvironment('prod');
        $b->setDebug(false);
        if ($this->has('security.token_storage')) {
            $b->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $b->setRequestStack($a);
        }
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'bootstrap_3_layout.html.twig'), 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'filename', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig', 1 => 'form_div_layout.html.twig', 2 => 'bootstrap_3_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('ivory.google_map.twig.extension.api'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.map.static'));
        $instance->addExtension($this->get('ivory.google_map.twig.extension.place_autocomplete'));
        $instance->addGlobal('app', $b);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'/vendor/egeloen/google-map-bundle/Resources/views'), 'IvoryGoogleMap');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/DamBundle/Resources/views'), 'Dam');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/ShopBundle/Resources/views'), 'Shop');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/AdminBundle/Resources/views'), 'Admin');
        $instance->addPath(($this->targetDirs[3].'/src/FishAndPlaces/UI/Bundle/UserBundle/Resources/views'), 'User');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));
        return $instance;
    }
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('fb65f46debe44b34ac4f286bc5628b30bfbaf2dd');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();
        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.util.canonical_fields_updater'))));
        $instance->addXmlMapping(($this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/DependencyInjection/Compiler/../../Resources/config/storage-validation/orm.xml'));
        return $instance;
    }
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.role_hierarchy');
        $b = $this->get('security.authentication.trust_resolver');
        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);
        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $b, $a), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($b)));
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($this->get('fos_user.user_provider.username'), $this->get('security.user_checker.main'), 'main', $this->get('security.encoder_factory'), true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('58e0cb334a7b62.34711130')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => ($this->targetDirs[3].'/app'),
            'kernel.environment' => 'prod',
            'kernel.debug' => false,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
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
                'DamBundle' => 'FishAndPlaces\\UI\\Bundle\\DamBundle\\DamBundle',
                'ShopBundle' => 'FishAndPlaces\\UI\\Bundle\\ShopBundle\\ShopBundle',
                'AdminBundle' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\AdminBundle',
                'UserBundle' => 'FishAndPlaces\\UI\\Bundle\\UserBundle\\UserBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdProjectContainer',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'fish_and_places',
            'database_user' => 'root',
            'database_password' => 1234567890,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'fb65f46debe44b34ac4f286bc5628b30bfbaf2dd',
            'images_upload_file_path' => '/tmp',
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
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => ($this->targetDirs[3].'/app/../var/sessions/prod'),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'data_collector.templates' => array(
            ),
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appProdUrlMatcher',
            'router.options.generator.cache_class' => 'appProdUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[3].'/app/config/routing.yml'),
            'router.cache_class_prefix' => 'appProd',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'debug.error_handler.throw_at' => 0,
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
                0 => 'IvoryGoogleMapBundle:Form:place_autocomplete_widget.html.twig',
                1 => 'form_div_layout.html.twig',
                2 => 'bootstrap_3_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(
            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
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
            'doctrine.orm.auto_generate_proxy_classes' => false,
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
            'doctrine_migrations.dir_name' => ($this->targetDirs[3].'/app/DoctrineMigrations'),
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'console.command.ids' => array(
            ),
        );
    }
}
class DoctrineORMEntityManager_000000000ccb5ac40000000138c21140dafd985995c0262ee99a0daa3e466028 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder58e0cb34720ef565278548 = null;
    private $initializer58e0cb34723a6655392043 = null;
    private static $publicProperties58e0cb34713e9887464802 = array(
        
    );
    public function getConnection()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getConnection', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getMetadataFactory', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getExpressionBuilder', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'beginTransaction', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getCache', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getCache();
    }
    public function transactional($func)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'transactional', array('func' => $func), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->transactional($func);
    }
    public function commit()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'commit', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->commit();
    }
    public function rollback()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'rollback', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getClassMetadata', array('className' => $className), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'createQuery', array('dql' => $dql), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'createNamedQuery', array('name' => $name), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'createQueryBuilder', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'flush', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->flush($entity);
    }
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->find($entityName, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'clear', array('entityName' => $entityName), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->clear($entityName);
    }
    public function close()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'close', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->close();
    }
    public function persist($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'persist', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'remove', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'refresh', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'detach', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'merge', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'contains', array('entity' => $entity), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getEventManager', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getConfiguration', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'isOpen', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getUnitOfWork', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getProxyFactory', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'initializeObject', array('obj' => $obj), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'getFilters', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'isFiltersStateClean', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'hasFilters', array(), $this->initializer58e0cb34723a6655392043);
        return $this->valueHolder58e0cb34720ef565278548->hasFilters();
    }
    public function __construct($initializer)
    {
        $this->initializer58e0cb34723a6655392043 = $initializer;
    }
    public function & __get($name)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__get', array('name' => $name), $this->initializer58e0cb34723a6655392043);
        if (isset(self::$publicProperties58e0cb34713e9887464802[$name])) {
            return $this->valueHolder58e0cb34720ef565278548->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58e0cb34720ef565278548;
            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }
        $targetObject = $this->valueHolder58e0cb34720ef565278548;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58e0cb34723a6655392043);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58e0cb34720ef565278548;
            return $targetObject->$name = $value;;
            return;
        }
        $targetObject = $this->valueHolder58e0cb34720ef565278548;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__isset', array('name' => $name), $this->initializer58e0cb34723a6655392043);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58e0cb34720ef565278548;
            return isset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder58e0cb34720ef565278548;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__unset', array('name' => $name), $this->initializer58e0cb34723a6655392043);
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder58e0cb34720ef565278548;
            unset($targetObject->$name);;
            return;
        }
        $targetObject = $this->valueHolder58e0cb34720ef565278548;
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
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__clone', array(), $this->initializer58e0cb34723a6655392043);
        $this->valueHolder58e0cb34720ef565278548 = clone $this->valueHolder58e0cb34720ef565278548;
    }
    public function __sleep()
    {
        $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, '__sleep', array(), $this->initializer58e0cb34723a6655392043);
        return array('valueHolder58e0cb34720ef565278548');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer58e0cb34723a6655392043 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer58e0cb34723a6655392043;
    }
    public function initializeProxy()
    {
        return $this->initializer58e0cb34723a6655392043 && $this->initializer58e0cb34723a6655392043->__invoke($this->valueHolder58e0cb34720ef565278548, $this, 'initializeProxy', array(), $this->initializer58e0cb34723a6655392043);
    }
    public function isProxyInitialized()
    {
        return null !== $this->valueHolder58e0cb34720ef565278548;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder58e0cb34720ef565278548;
    }
}
