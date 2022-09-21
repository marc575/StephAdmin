<?php

namespace Container5Bmwd2e;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54c39 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb30e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties12ae5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getConnection', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getMetadataFactory', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getExpressionBuilder', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'beginTransaction', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getCache', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'transactional', array('func' => $func), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'commit', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->commit();
    }

    public function rollback()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'rollback', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getClassMetadata', array('className' => $className), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'createQuery', array('dql' => $dql), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'createNamedQuery', array('name' => $name), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'createQueryBuilder', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'flush', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'clear', array('entityName' => $entityName), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->clear($entityName);
    }

    public function close()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'close', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->close();
    }

    public function persist($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'persist', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'remove', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'refresh', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'detach', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'merge', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'contains', array('entity' => $entity), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getEventManager', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getConfiguration', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'isOpen', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getUnitOfWork', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getProxyFactory', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'initializeObject', array('obj' => $obj), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'getFilters', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'isFiltersStateClean', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'hasFilters', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return $this->valueHolder54c39->hasFilters();
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

        $instance->initializerb30e5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder54c39) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54c39 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54c39->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__get', ['name' => $name], $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        if (isset(self::$publicProperties12ae5[$name])) {
            return $this->valueHolder54c39->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54c39;

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

        $targetObject = $this->valueHolder54c39;
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
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54c39;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54c39;
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
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__isset', array('name' => $name), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54c39;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54c39;
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
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__unset', array('name' => $name), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54c39;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54c39;
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
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__clone', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        $this->valueHolder54c39 = clone $this->valueHolder54c39;
    }

    public function __sleep()
    {
        $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, '__sleep', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;

        return array('valueHolder54c39');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb30e5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb30e5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb30e5 && ($this->initializerb30e5->__invoke($valueHolder54c39, $this, 'initializeProxy', array(), $this->initializerb30e5) || 1) && $this->valueHolder54c39 = $valueHolder54c39;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54c39;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54c39;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
