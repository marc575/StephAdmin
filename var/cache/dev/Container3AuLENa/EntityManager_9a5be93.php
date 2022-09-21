<?php

namespace Container3AuLENa;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder78e65 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3055a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0332b = [
        
    ];

    public function getConnection()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getConnection', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getMetadataFactory', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getExpressionBuilder', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'beginTransaction', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getCache', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'transactional', array('func' => $func), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'commit', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->commit();
    }

    public function rollback()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'rollback', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getClassMetadata', array('className' => $className), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'createQuery', array('dql' => $dql), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'createNamedQuery', array('name' => $name), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'createQueryBuilder', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'flush', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'clear', array('entityName' => $entityName), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->clear($entityName);
    }

    public function close()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'close', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->close();
    }

    public function persist($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'persist', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'remove', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'refresh', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'detach', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'merge', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'contains', array('entity' => $entity), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getEventManager', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getConfiguration', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'isOpen', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getUnitOfWork', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getProxyFactory', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'initializeObject', array('obj' => $obj), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'getFilters', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'isFiltersStateClean', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'hasFilters', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return $this->valueHolder78e65->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3055a = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder78e65) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder78e65 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder78e65->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__get', ['name' => $name], $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        if (isset(self::$publicProperties0332b[$name])) {
            return $this->valueHolder78e65->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78e65;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78e65;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78e65;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder78e65;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__isset', array('name' => $name), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78e65;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder78e65;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__unset', array('name' => $name), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder78e65;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder78e65;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__clone', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        $this->valueHolder78e65 = clone $this->valueHolder78e65;
    }

    public function __sleep()
    {
        $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, '__sleep', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;

        return array('valueHolder78e65');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3055a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3055a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3055a && ($this->initializer3055a->__invoke($valueHolder78e65, $this, 'initializeProxy', array(), $this->initializer3055a) || 1) && $this->valueHolder78e65 = $valueHolder78e65;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder78e65;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder78e65;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
