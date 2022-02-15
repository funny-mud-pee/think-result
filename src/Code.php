<?php


namespace funnymudpee\thinkphp\result;


class Code
{
    /** 401 Unauthorized */
    // 当前请求需要用户验证
    const UNAUTHORIZED = 40100000;
    // token missing
    const TOKEN_MISSING = 40100001;
    // 无效的jwt
    const INVALID_JWT = 40100002;
    // 站点过期
    const EXPIRED_SITE = 40100003;
    // invalid token
    const INVALID_TOKEN = 40100004;
    // 未登录的管理员
    const UNAUTHORIZED_ADMIN_USER = 40100101;
    // 不可用的管理员
    const UNAVAILABLE_ADMIN_USER = 40100102;
    // 没有操作权限
    const NO_PERMISSION = 40100200;


    /** 404 Not Found */
    // 请求失败，请求所希望得到的资源未被在服务器上发现
    const NOT_FOUND = 40400000;
    // 站点不存在
    const NOT_FOUND_SITE = 40400001;
    // 公众号授权不存在
    const NOT_FOUND_AUTHORIZER = 40400002;
    // 管理员不存在
    const NOT_FOUND_ADMIN_USER = 40400003;
    // 控制器不存在/路由未匹配/请求方式错误
    const NOT_FOUND_CONTROLLER = 40400004;
    // 处理器不存在
    const NOT_FOUND_HANDLER = 40400005;
    // 方法不存在
    const NOT_FOUND_METHOD = 40400006;

    /** 409 Conflict */
    // 资源已存在、重复等问题
    const CONFLICT = 40900000;

    /** 422 Unprocessable Entity */
    // 请求格式良好，但由于语义错误而无法遵循
    const UNPROCESSABLE_ENTITY = 42200000;
    // 管理员登录密码输入错误
    const WRONG_ADMIN_PASSWORD = 42200001;
    // 错误的验证码
    const WRONG_CAPTCHA = 42200002;
    // 缺少必须的参数
    const MISSING_REQUIRED_ARGUMENT = 42200003;
    // 缺少可选的参数
    const MISSING_OPTIONAL_ARGUMENT = 42200004;
    // 意外值
    const UNEXPECTED_VALUE = 42200005;

    /** 500 Internal Server Error */
    // 服务器遇到了不知道如何处理的情况
    const INTERNAL_SERVER_ERROR = 50000000;
    // 任务失败
    const TASK_FAILED = 50000001;
    // 授权不匹配，需要重新授权
    const AUTHORIZATION_MISMATCH = 50000002;
    // 功能未实现
    const NOT_IMPLEMENTED = 50000003;
    // 请求供应商接口时发生错误
    const PROVIDER_REQUEST_ERROR = 50000004;

    /** 5001 model Error */
    // 数据库模型内部错误
    const INTERNAL_MODEL_ERROR = 50010000;
    // 新增数据失败
    const MODEL_CREATE_FAILED = 50010001;
    // 更新数据失败
    const MODEL_UPDATE_FAILED = 50010002;

    /** 5009第三方平台的错误代码 */
    // 服务内部错误
    const INTERNAL_SERVICE_ERROR = 50090000;
    // 微信第三方平台设置刷新token凭证失败
    const OPEN_PLATFORM_SET_TICKET_FAILED = 50090001;
    // 微信第三方平台刷新token失败
    const OPEN_PLATFORM_REFRESH_TOKEN_FAILED = 50090002;
    // 微信第三方平台设置token失败
    const OPEN_PLATFORM_SET_TOKEN_FAILED = 50090003;
    // 微信第三方平台使用授权码获取授权信息失败
    const OPEN_PLATFORM_QUERY_AUTH = 50090004;
    // 微信第三方平台获取授权方的帐号基本信息失败
    const OPEN_PLATFORM_GET_AUTHORIZER = 50090005;


}