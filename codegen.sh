#!/usr/bin/env bash

set -eo pipefail

SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

cd "$SCRIPTDIR"

apis=("cart" "checkout" "channels" "sites" "pricing" "abandoned_cart" "widgets" "wishlist" "swagger")

swagger_codegen_version=2.4.7
build_dir="${SCRIPTDIR}/.swagger-codegen/build"
codegen_dir="${SCRIPTDIR}/swagger-codegen"
jar="modules/swagger-codegen-cli/target/swagger-codegen-cli.jar"

mkdir -p "${build_dir}"

to_camel_case() {
    local arr=(${1//_/ })
    printf %s "${arr[@]^}"
}

for api in "${apis[@]}"; do

input="/sdk/swagger/${api}.yaml"
output="/sdk/.swagger-codegen/build"
config="/sdk/config.json"
model_package=$(to_camel_case $api)

docker run --rm -it \
        -w /sdk \
        -e GEN_DIR=/gen \
        -e JAVA_OPTS="-DmodelTests=false -DmodelDocs=false -DapiTests=false -DapiDocs=false" \
        -u "$(id -u):$(id -g)" \
        -v "${PWD}:/sdk" \
        -v "${codegen_dir}:/gen" \
        swaggerapi/swagger-codegen-cli:$swagger_codegen_version \
        generate \
        -i "${input}" \
        -l php \
        -o "${output}" \
        -c "${config}" \
        --model-package="Model\\${model_package}"

done

cp -R "${build_dir}/Client/src/Api/." "${SCRIPTDIR}/src/Api/"
cp -R "${build_dir}/Client/src/Model/." "${SCRIPTDIR}/src/Model/"
cp "${build_dir}/Client/src/ApiException.php" "${SCRIPTDIR}/src/"
cp "${build_dir}/Client/src/Configuration.php" "${SCRIPTDIR}/src/"
cp "${build_dir}/Client/src/ObjectSerializer.php" "${SCRIPTDIR}/src/"
rm -rf "${codegen_dir}"
